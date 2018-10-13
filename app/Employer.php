<?php

namespace App;

class Employer extends Model
{
    public function jobs() {
        return $this->hasMany(Job::class);
    }
}
