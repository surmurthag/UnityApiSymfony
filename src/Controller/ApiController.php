<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController
{
    #[Route('/api/joueurs/joueurs_count', name: 'app_api')]
      public function joueursCount(): JsonResponse
    {
        
        $nombreDeJoueurs = 10; 
        return new JsonResponse(['joueurs_count' => $nombreDeJoueurs]);
    }
}
