<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficialRequest extends Model
{
    protected $fillable = [
        'name', 'email', 'plan', 'mentor_id', 'goal', 'questions', 'dates', 'precaution',
    ];
    
    public function sender()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function mentor()
    {
        return $this->belongsTo(User::class, 'mentor_id');
    }
    
    public function hasRecord($userId)
    {
        return OfficialRecord::where('from_user_id', $this->id)->exists();
    }
    
}
