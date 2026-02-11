<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    ///
    protected $fillable = [
        'title',
        'description',
        'tags',
        'category',
        'slugs',
        'blog_image',
        'is_active',
    ];
    // related data with category
    public function category_id()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}
