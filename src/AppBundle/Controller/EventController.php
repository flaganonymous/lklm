<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use AppBundle\Entity\Event;

class EventController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/events")
     */
    public function getEventsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository('AppBundle:Event')->findAll();
        $response = array();
        return $events;
    }

  /**
     * @Rest\View()
     * @Rest\Post("/events")
     */
    public function postEventAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $event = new Event();
        $event
        ->setUser($request->get('user'))
        ->setAvatarIndex($request->get('avatarIndex'))
        ->setNicename($request->get('nicename'))
        ->setTextEmail($request->get('textEmail'))
        ->setTextDate($request->get('textDate'))
        ->setTextSlogan($request->get('textSlogan'))
        ->setMyClass($request->get('myClass'))
        ->setMyFavoriteSubject($request->get('myFavoriteSubject'))
        ->setMyBestNotation($request->get('myBestNotation'))
        ->setMyDiploma($request->get('myDiploma'))
        ->setMyReward($request->get('myReward'))
        ->setMyTrainer($request->get('myTrainer'))
        ->setMyMovie($request->get('myMovie'))
        ->setMyCitation($request->get('myCitation'))
        ->setMyValue($request->get('myvalue'))
        ->setMyInterest($request->get('myInterest'))
        ->setMyHobby($request->get('myHobby'))
        ->setTextReve($request->get('textReve'))
        ->setCreation(new \DateTime($request->get('creation')))
        ->setAltercation($request->get('altercation'))
        ->setCategory($request->get('category'));
        $em->persist($event);
        $em->flush();

        return $event;
    }

    /**
     * @Rest\View()
     * @Rest\Get("/events/count")
     */
    public function getCountAction(Request $request)
    {
        
        // $column = $request->get('column');
        // $network = $request->get('network');
        // $start = $request->get('start');
        // $end = $request->get('end');

        // $em = $this->getDoctrine()->getManager();
        // $events = $em->getRepository('AppBundle:Event')->findAll();
        // $response = array();
        
        // return $rp->createQueryBuilder('e')
        // ->select('COUNT(e.'.$column.') AS count, e.'.$column)
        // ->where('e.network = :network')
        // ->andWhere('e.'.$column.' != :null')
        // ->andWhere('e.creation <= :end')
        // ->andWhere('e.creation >= :start')
        // ->setParameters([
        //     'network' => $network,
        //     'null' => '',
        //     'start' => new DateTime($start),
        //     'end' => new DateTime($end)
        //     ])
        //     ->groupBy('e.'.$column)
        //     ->getQuery()
        //     ->getResult();
    }
}
