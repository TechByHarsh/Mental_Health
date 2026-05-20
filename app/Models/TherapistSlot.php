<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TherapistSlot extends Model
{
    public function therapist()
{
    return $this->belongsTo(Therapist::class);
}
}
