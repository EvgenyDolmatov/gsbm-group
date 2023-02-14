<?php

namespace App\Models\CRM;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attestation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "crm_attestations";
    protected $fillable = ["employee_id", "direction_id"];

    public function documents(): HasMany
    {
        return $this->hasMany(AttestationDocument::class);
    }

    public function lastDocumentByType($type)
    {
        return $this->documents->where("type", $type)->last();
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function direction(): BelongsTo
    {
        return $this->belongsTo(Direction::class);
    }


    public function getLastDocByType($type): string
    {
        $lastDoc = $this->lastDocumentByType($type);

        if ($lastDoc->count()) {
            $validFrom = Carbon::createFromFormat("Y-m-d", $lastDoc->valid_from)->format("d.m.Y");
            return "№" . $lastDoc->doc_number . "<br>от&nbsp;" . $validFrom . "&nbsp;г.";
        }
        return "Нет данных";
    }

    public function isExpiresDate() : bool
    {
        $lastProtocol = $this->lastDocumentByType("protocol");
        $lastCert = $this->lastDocumentByType("certificate");

        if ($lastProtocol->getExpiresDays() < 14 || $lastCert->getExpiresDays() < 14) {
            return true;
        }
        return false;
    }
}
