<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;

class NetworkController extends Controller
{
     /**
     * @Rest\View()
     * @Rest\Get("/networks")
     */
    public function getNetworkAction()
    {
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository('AppBundle:Network')->findAll();
    }
}
