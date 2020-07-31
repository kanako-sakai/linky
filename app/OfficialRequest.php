<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficialRequest extends Model
{
    protected $fillable = [
        'name', 'email', 'plan', 'mentor_pref', 'goal', 'questions', 'dates', 'precaution',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
