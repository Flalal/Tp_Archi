<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class Alea2Controller extends Controller {
    /**
     * @return Response
     * @Route("/nombre/alea2", name="nombre_alea2")
     */
    function index() {
        $valeur = mt_rand(0, 100);

        return $this->render(
            'aleatoire/aleatoire.html.twig',['valeur' => $valeur,]
        );
    }

    /**
     * @Route("/nombre/aleajson", name="nombre_aleajson")
     */
    public function nombreJSON() {
        $limite = 1000;
        $val = mt_rand(0, $limite);
        $response = new Response();
        $response->setContent(json_encode(array(
            'limite' => $limite,
            'valeur' => $val,
        )));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}