<?php

namespace App\Services;

use App\Exceptions;
use  App\Exceptions\SmsException\SmsSendingException;

class SenderServices{

    /**
     * @param string $message
     * @param string $phone
     * @throws SmsSendingException
     */
    function sendMessage(string $message, string $phone)
    {
        $send = $this->send($message, $phone);
        if(!$send){
            throw new SmsSendingException($phone);
        }
        \logs()->info("send sms on number [{$phone}]");
    }


    private function  send($message, $phone){

        $send = [
            'message' => \Str::slug($message),    // some act
            'phone' => \Str::slug($phone)         // some act
        ];

        return $send;
    }
}
