<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    public function user()
    {
        return $this->hasMany(User::class);
    }
    
    public function profile()
    {
        return $this->hasMany(Profile::class);
    }
}
