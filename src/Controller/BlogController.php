<?php
/**
 * Created by PhpStorm.
 * User: florian.flahaut
 * Date: 25/10/17
 * Time: 13:56
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function listAction()
    {
        // ...
    }

    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function showAction($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
    }

    /**
     * Matches /nombre/alea3/
     *
     * @Route("/nombre/alea3/{valeur}", name="valeur", requirements={"valeur": "\d+"})
     */
    public function showParam($valeur){
        return $this->render(
            'aleatoire/parametre.html.twig',['valeur' => $valeur,]
        );
    }
}