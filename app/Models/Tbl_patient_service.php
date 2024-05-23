<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tbl_patient_service extends Model
{
    use HasFactory;

    public function patient() : BelongsTo {
        return $this->belongsTo(Tbl_patient::class, 'patientId');
    }
}
