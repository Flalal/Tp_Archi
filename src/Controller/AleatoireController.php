<?php

/**
 * Created by PhpStorm.
 * User: florian.flahaut
 * Date: 25/10/17
 * Time: 13:38
 */

namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AleatoireController
{
    /**
     *  @Route("/nombre/aleatoire", name="nombre_aleatoire")
     */
    public function nombreAleatoire() {
        $val = mt_rand(0, 100);

        return new Response('<html><body>Nombre Aléatoire: '.$val.'</body></html>');
    }
}