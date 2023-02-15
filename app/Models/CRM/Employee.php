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
}
