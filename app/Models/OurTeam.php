<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
        protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'is_active',
        'image',
    ];
}
