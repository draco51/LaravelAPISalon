<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FreelancerProfile extends Model
{
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
