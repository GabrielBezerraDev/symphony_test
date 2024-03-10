<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{    
    #[
        Route(
                path: "lucky/number/{id}",
                methods:["GET"]
            )
    ]
    public function number(Request $request, $id): Response
    {   
        // echo "Número do id: $id";
        // echo "\n\n";
        // echo $request;
        $number = random_int(0, 100);

        return $this->render("homePage/homePage.html.twig");
    }
}