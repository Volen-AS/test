<?php

namespace App\Services\ModelServices;

use App\Models\SmsSendin;
use Carbon\Carbon;

Class SmsSendingServices
{
    protected $model;


    public function __construct()
    {
        $this->model = app(SmsSendin::class);
    }

    public function create( array $data )
    {
        $date = $this->setDate($data['time']);

        $rr = SmsSendin::create([
            'group_id' => $data['group_id'],
            'msg_templates_id' => $data['msg_template_id'],
            'send_time' => $date
        ]);
    }

    public function delete()
    {

    }

    private function setDate( $time )
    {
        return Carbon::createFromFormat('Y-m-d H:i', $time );
    }
}
