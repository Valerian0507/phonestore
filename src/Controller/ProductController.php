<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('produits', name: 'app_produits')]
    public function produits(): Response
    {
        return $this->render('product/produits.html.twig');
    }
}
