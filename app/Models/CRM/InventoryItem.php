<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "crm_inventory_items";
    protected $fillable = ["name", "quantity"];


    public function limitSchedules(): HasMany
    {
        return $this->hasMany(InventorySchedule::class);
    }

    public function arrivesItems(): HasMany
    {
        return $this->hasMany(LogArrivedInventoryItem::class);
    }

    public function getLimitByProf($prof): string
    {
        $limit = $this->limitSchedules->where("profession_id", $prof->id)->first();
        return $limit ? $limit->rate_per_year : "Не задано";
    }
}
