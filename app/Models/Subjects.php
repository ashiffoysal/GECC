<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\University;
use App\Models\Level;

class Subjects extends Model
{
    //join university and level tables to get the university name and level name
    public function alluniversity()
    {
        return $this->belongsTo(University::class, 'university', 'id');
    }
    // join level table to get the level name
    public function level()
    {       
         return $this->belongsTo(Level::class, 'Level', 'id');
    }
}
