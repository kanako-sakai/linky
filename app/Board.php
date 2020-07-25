<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    //送り元ユーザとの紐づけ
    public function senderUser()
    {
        return $this->hasOne(User::class, 'id', 'from_user_id');
    }
    
    //送り先ユーザとの紐づけ
    public function recipientUser()
    {
        return $this->hasOne(User::class, 'id', 'to_user_id');
    }
    
    // DM相手を表示するためにotherUserを用意
    public function otherUser()
    {
        $user_id = Auth::id();
        $other_key = '';
        if ($user_id === $this->from_user_id) {
            $other_key = 'to_user_id';
        }else if ($user_id === $this->to_user_id) {
            $other_key = 'from_user_id';
        }
        return $this->hasOne(User::class, 'id', $other_key);
    }
    
    public function direct_messages()
    {
        return $this->hasMany(User::class);
    }
}
