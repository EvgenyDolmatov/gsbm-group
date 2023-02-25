<?php

namespace App\Models\CRM;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogIssuedInventoryItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "crm_log_issued_inventory_items";
    protected $fillable = ["employee_id", "inventory_item_id", "quantity", "issue_date", "next_issue_date"];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function inventoryItem(): BelongsTo
    {
        return $this->belongsTo(InventoryItem::class);
    }

    public static function add(array $input, $emp)
    {
        $log = new static;
        $log->fill($input);
        $log->employee_id = $emp->id;
        $log->save();

        return $log;
    }

    /*
     * Дата выдачи
     */
    public function getIssueDate(): string
    {
        if ($this->issue_date)
            return Carbon::createFromFormat("Y-m-d", $this->issue_date)->format("d.m.Y") . " г.";
        return "Не указано";
    }

    /*
     * Дата следующей выдачи
     */
    public function getNextIssueDate(): string
    {
        if ($this->next_issue_date)
            return Carbon::createFromFormat("Y-m-d", $this->next_issue_date)->format("d.m.Y") . " г.";
        return "Не указано";
    }

    /*
     * Количество дней до замены СИЗ
     */
    public function getExpiresDays(): bool|int
    {
        if (!$this->next_issue_date) return 100;

        $today = Carbon::now();
        $expiredDate = new Carbon($this->next_issue_date);
        return $expiredDate->diff($today)->days;
    }

    /*
     * Приближение срока замены СИЗ
     */
    public function isExpiresDays(): bool
    {
        return $this->getExpiresDays() < 14;
    }
}
