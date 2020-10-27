<?php

namespace App\Services\ModelServices;

use App\Models\SmsSended;

class SendedServices
{
    protected $send;

    public function __construct()
    {
        $this->send = app(SmsSended::class);
    }

    public function create( $group_id, $msg_templates_id )
    {
        $result =  SmsSended::create([
                'group_id' => $group_id,
                'msg_templates_id'=> $msg_templates_id

            ]);
        return $result;
    }
}
