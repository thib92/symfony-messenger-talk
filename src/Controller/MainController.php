<?php

namespace App\Controller;

use App\Message\SendSmsMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index(MessageBusInterface $messageBus)
    {
        // $messageBus->dispatch(new SendSmsMessage("Hello World"));
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
