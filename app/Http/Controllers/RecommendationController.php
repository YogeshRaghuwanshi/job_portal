<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CandidateSkill;
use App\Models\Job;

class RecommendationController extends Controller
{
    public function getRecommendations(Request $request)
    {
       
        $request->validate([
            'user_id' => 'required|integer|',
        ]);

       
        $candidateSkills = CandidateSkill::where('user_id', $request->input('user_id'))
            ->with('skill') 
            ->pluck('skill_id') 
            ->toArray();

       
        $recommendedJobs = Job::whereHas('requiredSkills', function ($query) use ($candidateSkills) {
            $query->whereIn('id', $candidateSkills);
        })->get();

        return response()->json($recommendedJobs);
    }
}

