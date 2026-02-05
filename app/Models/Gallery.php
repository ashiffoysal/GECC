<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $fillable = [
        'title',
        'image',
        'created_by',
        'updated_by',
        'is_active',
        'is_deleted',
    ];

}
