<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs'; 
    protected $fillable = ['title', 'description', 'required_skills'];

    public function requiredSkills()
    {
        return $this->belongsToMany(CoreJobSkill::class, 'job_skills', 'job_id', 'skill_id');
    }
}
