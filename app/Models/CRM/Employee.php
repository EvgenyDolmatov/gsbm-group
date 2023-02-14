<?php

namespace App\Models\CRM;

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

    public function attestationDocs(): HasMany
    {
        return $this->hasMany(AttestationDocument::class);
    }
}
