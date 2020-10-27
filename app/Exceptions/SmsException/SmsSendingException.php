<?php

namespace App\Exceptions\SmsException;

use Exception;
use Throwable;


class SmsSendingException extends Exception
{
    protected $phone;

    public function __construct($phone, $message = "", $code = 0, Throwable $previous = null)
    {
        $this->phone = $phone;
        parent::__construct($message, $code, $previous);
    }

    public function getResult(){
        \logs()->warning("Cant send sms on number [{$this->phone}]");
    }

}
