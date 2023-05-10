<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExampleTemp extends AbstractController
{
    #[Route('/', name: 'app_example')]
    public function index(Request $request): Response
    {
        $input = $request->query->get('input');
        $result = '';
        if ($input !== null) {
            $result = $input.' Celsius is '.($input * 9/5 + 32) . ' Fahrenheit';
        }

        return $this->render('tempConvert/home.html.twig', [
            'result' => $result
        ]);
    }
}


?>


