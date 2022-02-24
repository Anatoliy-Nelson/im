<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index(Request $request): Response
    {
        $number = random_int(0, 100);
        $name = $request->query->get('name');

        return $this->render('default/index.html.twig', [
            'name' => $name,
            'number' => $number,
        ]);

    }    
}