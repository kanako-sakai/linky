<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
