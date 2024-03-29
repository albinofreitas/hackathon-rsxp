<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $guarded = ['id'];

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
