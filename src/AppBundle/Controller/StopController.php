<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;

class StopController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/stops")
     */
    public function getStopsAction()
    {
        $return = [];
        $em = $this->getDoctrine()->getManager();

        $stops = $em->getRepository('AppBundle:Stop')->findAll();
        foreach ($stops as $stop) {
            $return[] = [
                'id' => $stop->getId(),
                'name' => $stop->getName(),
                'line' => $stop->getLine()->getName()
            ];
        }
        return $return;
    }
}
