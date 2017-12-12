<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use AppBundle\Entity\User;

class TaskController extends Controller
{
     /**
     * @Rest\View()
     * @Rest\Get("/tasks/{user}")
     */
    public function getTasksAction(User $user)
    {
        $now = new \DateTime();
        return $this->getDoctrine()
        ->getManager()
        ->createQuery(
        'SELECT t, u FROM AppBundle:Task t
        JOIN t.users u
        WHERE u.id = :id
        AND t.start <= :now
        AND t.end >= :now')
        ->setParameters(['id' => $user, 'now' => $now])
        ->getResult();
    }
}
