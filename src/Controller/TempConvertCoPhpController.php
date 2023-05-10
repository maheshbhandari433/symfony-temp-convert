<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TempConvertCoPhpController extends AbstractController
{
    #[Route('/convert', name: 'app_temp_convert_co_php')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TempConvertCoPhpController.php',
        ]);
    }
}
