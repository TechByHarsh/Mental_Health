<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function therapist()
{
    return $this->belongsTo(Therapist::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

public function slot()
{
    return $this->belongsTo(TherapistSlot::class, 'therapist_slot_id');
}
}
