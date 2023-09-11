<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SouscompetenceController extends AbstractController
{
    #[Route('/souscompetence', name: 'app_souscompetence')]
    public function index(): Response
    {
        return $this->render('souscompetence/index.html.twig', [
            'controller_name' => 'SouscompetenceController',
        ]);
    }
}
