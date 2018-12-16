<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 2018-12-16
 * Time: 16:12
 */

namespace App\Message;


class SendSmsMessage
{
    private $message;

    /**
     * SendSmsMessage constructor.
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

}