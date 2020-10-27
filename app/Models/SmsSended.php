<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmsSended extends Model
{
    protected $fillable
        = [
            'group_id',
            'msg_templates_id',
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
