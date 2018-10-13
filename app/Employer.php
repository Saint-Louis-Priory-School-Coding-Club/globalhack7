<?php

namespace App;

class Employer extends Model
{
    public function jobs() {
        return $this->belongsToMany(Job::class);
    }
}
