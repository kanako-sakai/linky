<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
    
    public function posts_2()
    {
        return $this->hasMany(Post::class, 'category_id_2');
    }
    
    public function posts_3()
    {
        return $this->hasMany(Post::class, 'category_id_3');
    }
    
    public function articles()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }
}
