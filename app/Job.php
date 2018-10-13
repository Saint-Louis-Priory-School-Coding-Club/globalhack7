<?php

namespace App;

class Job extends Model
{
    public function experience() {
        return $this->belongsTo(Experience::class);
    }

    public function employer() {
        return $this->hasOne(Employer::class);
    }
}
