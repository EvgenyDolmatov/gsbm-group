<?php

namespace App\Models\CRM;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "crm_employees";
    protected $fillable = [
        "surname",
        "name",
        "middle_name",
        "phone",
        "email",
        "birthday",
        "snils",
        "company_id",
        "profession_id",
        "profession_discharge"
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function profession(): BelongsTo
    {
        return $this->belongsTo(Profession::class);
    }

    public function attestations(): HasMany
    {
        return $this->hasMany(Attestation::class);
    }

    public function medInspections(): HasMany
    {
        return $this->hasMany(MedInspection::class);
    }

    public function issuedInventoryItems(): HasMany
    {
        return $this->hasMany(LogIssuedInventoryItem::class);
    }

    public function getLastIssueByItem($item)
    {
        return $this->issuedInventoryItems->where("inventory_item_id", $item->id)->last();
    }

    public function getLastIssueQtyByItem($item)
    {
        $lastItem = $this->issuedInventoryItems->where("inventory_item_id", $item->id)->last();
        return $lastItem ? $lastItem->quantity : "a";
    }

    public function getFullName(): string
    {
        $arr = array();
        if ($this->surname) $arr[] = $this->surname;
        if ($this->name) $arr[] = $this->name;
        if ($this->middle_name) $arr[] = $this->middle_name;

        return implode(' ', $arr);
    }

    public function getBirthday(): string
    {
        if ($this->birthday) {
            return Carbon::createFromFormat("Y-m-d", $this->birthday)->format("d.m.Y");
        }
        return "Нет данных";
    }

    public function getProfession(): string
    {
        $prof = [];
        if ($this->profession) $prof[] = $this->profession->name;
        if ($this->profession_discharge) $prof[] = $this->profession_discharge . ' разряд';

        return !empty($prof) ? implode(', ', $prof) : "Нет данных";
    }

    public function getCompany(): string
    {
        return $this->company ? $this->company->name : "Нет данных";
    }

    public function lastMedInspection($type)
    {
        return $this->medInspections->where("type", $type)->last();
    }


    /*
     * Проверка на приближение срока медосмотра
     */
    public function isMedExpiresDate(): bool
    {
        $lastCommon = $this->medInspections->where("type", "common")->last();
        $lastPsych = $this->medInspections->where("type", "psych")->last();

        return ($lastCommon && $lastCommon->getExpiresDays() < 14) || ($lastPsych && $lastPsych->getExpiresDays() < 14);
    }

    public function getLastMedInspection($type): string
    {
        $lastInspect = $this->lastMedInspection($type);
        if ($lastInspect) {
            $inspectDate = Carbon::createFromFormat("Y-m-d", $lastInspect->inspection_date)->format("d.m.Y");
            return $inspectDate . "&nbsp;г.";
        }
        return "Нет данных";
    }

    /*
     * Подсчет полученных СИЗов
     */
    public function getQtyItemsByInventory($inv): int
    {
        $now = Carbon::now();
        $startYear = $now->copy()->startOfYear();
        $items = $this->issuedInventoryItems
            ->where("inventory_item_id", $inv->id)
            ->where("issue_date", ">=", $startYear);

        $count = 0;
        foreach ($items as $item) {
            $count += $item->quantity;
        }

        return $count;
    }
}
