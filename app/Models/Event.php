<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // relted data with category
    protected $fillable = [
        'title',
        'description',      
        'tags',
        'category',
        'slug',
        'image',
        'is_active',
    ];

    public function category_id()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}
