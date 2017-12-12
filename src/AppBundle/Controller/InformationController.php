<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;

class InformationController extends Controller
{
     /**
     * @Rest\View()
     * @Rest\Get("/informations/")
     */
    public function getInformationsAction()
    {
        $now = new \DateTime();
        return $this->getDoctrine()
        ->getManager()
        ->createQuery(
        'SELECT i FROM AppBundle:Information i
        WHERE i.start <= :now
        AND i.end >= :now')
        ->setParameter('now', $now)
        ->getResult();
    }
}
