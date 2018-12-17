<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 2018-12-16
 * Time: 18:02
 */

namespace App\MessageHandler;


use App\Message\SendSmsMessage;
use Psr\Container\ContainerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SensSmsMessageHandler implements MessageHandlerInterface
{
    /** @var \GuzzleHttp\Client $client */
    private $client;

    /**
     * SensSmsMessageHandler constructor.
     */
    public function __construct(ContainerInterface $container)
    {
        $this->client= $container->get('eight_points_guzzle.client.my_client');
    }

    public function __invoke(SendSmsMessage $message)
    {
        $res = $this->client->get('/');
        echo $res->getBody();
    }
}