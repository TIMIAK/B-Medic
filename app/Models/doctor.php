<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function clinic()
    {
        return $this->belongsTo(clinic::class);
    }
}
