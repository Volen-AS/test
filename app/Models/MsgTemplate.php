<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsgTemplate extends Model
{
    protected $fillable
        = [
            'user_id',
            'msg_text'
        ];

    protected function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
