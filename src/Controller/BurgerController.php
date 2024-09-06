<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BurgerController extends AbstractController
{
    #[Route('/burger', name: 'burger')]
    public function index(): Response
    {
        return $this->render('burger.html.twig');
    }
    #[Route('/burgerid/{id}', name: 'burgerid')]
    public function burger(int $id): Response
    {
        $burger = [0=>['name' => 'burger1'],1=>['name' => 'burger2']];
        $burgerr = $burger[$id];
        return $this->render('burger.html.twig',['burger' => $burgerr]);
    }
}
