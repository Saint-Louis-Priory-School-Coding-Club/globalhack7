<?php

namespace App;

class Experience extends Model
{
    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function jobs() {
        return $this->hasMany(Job::class);
    }
}
