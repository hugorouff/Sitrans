<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    /*#[Route('/', name: 'app_index')]
    #[Route('/en', name: 'app_en')]
    #[Route('/fr', name: 'app_fr')]
    #[Route('/rus', name:'app_rus')]*/
    #[Route('{_locale}/', name: 'app_home', requirements: ['_locale' => 'fr|en|rus'])]
    //#[Route('{_locale}/', name: 'app_home', requirements: ['_locale' => 'fr|rus'])]
    //#[Route('{_locale}/', name: 'app_home', requirements: ['_locale' => 'en|rus'])]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
