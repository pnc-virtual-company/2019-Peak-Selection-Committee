<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    
    public function answers()
    {
        return $this->belongsToMany(Answer::class);
    }
  
}
