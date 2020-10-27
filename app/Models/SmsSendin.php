<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmsSendin extends Model
{
    protected $fillable
        = [
            'group_id',
            'msg_templates_id',
            'send_time',
            'processing'
        ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
    public  function msg()
    {
        return $this->belongsTo(MsgTemplate::class, 'msg_templates_id');
    }

}
