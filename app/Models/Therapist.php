<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    public function slots()
{
    return $this->hasMany(TherapistSlot::class);
}
}
