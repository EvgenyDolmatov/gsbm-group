<?php

namespace App\Models\CRM;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedInspection extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "crm_med_inspections";
    protected $fillable = ["employee_id", "type", "inspection_date", "next_inspection_date"];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public static function addByEmployee(array $input, $employee): static
    {
        $med = new static;
        $med->fill($input);
        $med->employee_id = $employee->id;
        $med->save();

        return $med;
    }

    public function getExpiresDays(): bool|int
    {
        // Если next_inspection_date = null, то возвращаем любую цифру, больше чем 14
        if (!$this->next_inspection_date) return 100;

        $today = Carbon::now();
        $expiredDate = new Carbon($this->next_inspection_date);
        return $expiredDate->diff($today)->days;
    }
}
