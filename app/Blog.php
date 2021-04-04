<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'content',
        'category_id'
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
