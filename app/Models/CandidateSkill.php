<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateSkill extends Model
{
    protected $table = 'candidate_skills'; 
    protected $fillable = ['candidate_id', 'skill']; 

    public function skill()
    {
        return $this->belongsTo(CoreJobSkill::class, 'skill_id');
}
}