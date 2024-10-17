<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoreJobSkill extends Model
{
    protected $table = 'core_job_skills'; 

    protected $fillable = ['title', 'uuid', 'status'];
}
