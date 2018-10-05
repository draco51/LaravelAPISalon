<?php

namespace App\Model;

use App\Model\Skill;
use Illuminate\Database\Eloquent\Model;


class FreelancerProfile extends Model
{
    public function skills()
    {
        return $this->hasMany(Skill::class,'Fid');
    }

    public function calendar()
    {
        return $this->hasMany(Calendar::class,'Fid');
    }
}
