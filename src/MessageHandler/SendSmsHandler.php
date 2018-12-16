<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 2018-12-16
 * Time: 16:14
 */

namespace App\MessageHandler;


use App\Message\SendSmsMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SendSmsHandler implements MessageHandlerInterface
{

    public function __invoke(SendSmsMessage $message)
    {
        echo $message->getMessage();
    }

}