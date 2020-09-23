<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficialRecord extends Model
{
    protected $fillable = [
        'from_user_id', 'action', 'credit', 'debit', 'balance',
    ];
    
    public function sender()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }
    
}
