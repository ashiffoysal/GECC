<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //blog category
    protected $fillable = [
        'name',
        'is_active',
    ];  


    public function category()
    {
        return $this->hasMany(Blog::class, 'category', 'name');
    }
    
}
