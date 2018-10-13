<?php

namespace App;

class Job extends Model
{
    public function experience() {
        return $this->belongsTo(Experience::class);
    }

    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
