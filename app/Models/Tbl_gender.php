<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tbl_gender extends Model
{
    use HasFactory;
    public function gender() : BelongsTo {
        return $this->belongsTo(Tbl_patient::class, 'genderId');
    }
}
