<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function doormat(): Response
    {
        return $this->render('home/doormat.html.twig');
    }

    /**
     * @Route("/index", name="home_index")
     * @IsGranted("ROLE_USER")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
}
