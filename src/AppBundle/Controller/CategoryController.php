<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;

class CategoryController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/categories")
     */
    public function getCategoriesAction()
    {
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository('AppBundle:Category')->findAll();
    }
}
