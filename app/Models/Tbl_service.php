<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tbl_service extends Model
{
    use HasFactory;
    public function patientServices() : HasMany {
        return $this->hasMany(Tbl_patient_service::class,"patientId");
    }
}
