<?php

namespace App\Controller;

use App\Message\SendSmsMessage;
use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /** @var Client $client */
    private $client;

    /**
     * MainController constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }


    /**
     * @Route("/main", name="main")
     * @param MessageBusInterface $messageBus
     * @return Response
     */
    public function index(MessageBusInterface $messageBus)
    {
        $messageBus->dispatch(new SendSmsMessage("Hello World"));
        // $res = $this->client->get('/');
        // dump($res);
        return new Response("Sent command to webservice.");
    }
}
