<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'from_user_id', 'mentor_id', 'date', 'time', 'zoom_link', 'conducted',
    ];
    
    public function sender()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }
    
    public function mentor()
    {
        return $this->belongsTo(User::class, 'mentor_id');
    }
}
