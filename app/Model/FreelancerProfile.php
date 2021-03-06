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

    public function qualitifications()
    {
        return $this->hasMany(Qualitification::class,'Fid');
    }

    public function calendar()
    {
        return $this->hasMany(Calendar::class,'Fid');
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class,'Fid');
    }
}
