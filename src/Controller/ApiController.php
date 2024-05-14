<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController
{
    #[Route('/api', name: 'app_api')]
      public function joueursCount(): JsonResponse
    {
        // Remplacez ceci par la logique réelle pour obtenir le nombre de joueurs
        $nombreDeJoueurs = 10; // Exemple statique
        return new JsonResponse(['joueurs_count' => $nombreDeJoueurs]);
    }
}
