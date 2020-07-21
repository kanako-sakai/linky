<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class MentorRequest extends Model
{
    protected $table = 'mentor_requests';
    /**
     * リクエストを出しているのユーザ
     */
     
    public function sender()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }
    
    public function receiver()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }

}
