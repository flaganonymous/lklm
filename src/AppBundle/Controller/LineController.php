<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;

class LineController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/lines")
     */
    public function getLinesAction()
    {
        $return = [];
        $em = $this->getDoctrine()->getManager();
        $lines = $em->getRepository('AppBundle:Line')->findAll();
        foreach ($lines as $line) {
            $return[] = [
                'id' => $line->getId(),
                'name' => $line->getName(),
                'network' => $line->getNetwork()->getName(),
                'stops' => array_map(function($s) { return $s->getName(); }, $line->getStops())
            ];
        }
        return $return;
    }
}
