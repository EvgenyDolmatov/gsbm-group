<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogArrivedInventoryItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "crm_log_arrived_inventory_items";
    protected $fillable = ["user_id", "inventory_item_id", "quantity", "arrive_date"];
}
