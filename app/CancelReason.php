<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CancelReason extends Model
{
    public function user()
  {
      return $this->hasMany(User::class);
  }
}
