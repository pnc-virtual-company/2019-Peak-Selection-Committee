<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class SelectedCandidate extends Controller
{
    public function selected(){
        $candidate= Candidate::all();
        return view('pages.selectedCandidate',compact('candidate'));
    }
    public function allCandidates(){
        $candidate= Candidate::all();
        return view('pages.allCandidates',compact('candidate'));
    }
}
