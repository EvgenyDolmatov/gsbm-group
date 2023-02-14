<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttestationDocument extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "crm_attestation_documents";
    protected $fillable = ["employee_id", "direction_id", "type", "number", "valid_from", "valid_to"];


    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function direction(): BelongsTo
    {
        return $this->belongsTo(Direction::class);
    }

    public static function add(array $input, $employee): static
    {
        $doc = new static();
        $doc->fill($input);
        $doc->employee_id = $employee->id;
        $doc->save();

        return $doc;
    }
}
