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
    protected $fillable = ["employee_id", "inventory_item_id", "quantity", "issue_date"];

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

    public function getIssueDate()
    {
        return Carbon::createFromFormat("Y-m-d", $this->issue_date)->format("d.m.Y") . " г.";
    }
}
