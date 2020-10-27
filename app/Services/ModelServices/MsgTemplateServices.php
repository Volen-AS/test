<?php

namespace App\Services\ModelServices;

use App\Models\MsgTemplate;

Class MsgTemplateServices
{
    protected $model;


    public function __construct()
    {
        $this->model = app(MsgTemplate::class);
    }

    /**
     *save msg
     *msdTemplate us observers for creating set user_id
     * @param string $msg
     */
    public function create( string $msg )
    {
        $saveMsg = MsgTemplate::create([
            'msg_text' => $msg
        ]);
        if( $saveMsg ) {
            return true;
        } else {
            return false;
        }
    }
}
