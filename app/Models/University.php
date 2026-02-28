<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
            public function subjects()
            {
                return $this->hasMany(Subjects::class, 'university', 'id');
            }
}
