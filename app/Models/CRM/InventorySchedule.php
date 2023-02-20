<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InventorySchedule extends Model
{
    use HasFactory;

    protected $table = "crm_inventory_schedule";
    protected $fillable = ["inventory_item_id", "profession_id", "rate_per_year"];

    public function inventory(): BelongsTo
    {
        return $this->belongsTo(InventoryItem::class);
    }

    public function profession(): BelongsTo
    {
        return $this->belongsTo(Profession::class);
    }

    public static function add(array $input, $item)
    {
        $sch = new static;
        $sch->fill($input);
        $sch->inventory_item_id = $item->id;
        $sch->save();

        return $sch;
    }
}
