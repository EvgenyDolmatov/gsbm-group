<?php

namespace App\Models\CRM;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttestationDocument extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "crm_attestation_documents";
    protected $fillable = ["attestation_id", "type", "doc_name", "doc_number", "valid_from", "valid_to"];


    public function attestation(): BelongsTo
    {
        return $this->belongsTo(Attestation::class);
    }

    public function getExpiresDays(): bool|int
    {
        // Если next_inspection_date = null, то возвращаем любую цифру, больше чем 14
        if (!$this->valid_to) return 100;

        $today = Carbon::now();
        $expiredDate = new Carbon($this->valid_to);
        return $expiredDate->diff($today)->days;
    }
}
