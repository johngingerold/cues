<?php

namespace CUES\ViewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use \DateTime;

class EventsController extends Controller
{
    /**
     * @Route("/events/{date}")
     * @Route("/events/{date}/")
     * @Template()
     */
    public function listAllOnDateAction($date)
    {
        $inputDateTime = new DateTime($date);
        $requestedDate = $inputDateTime->format('Y-m-d');

        $repository = $this->getDoctrine()->getRepository('CUESViewBundle:event');
        $query = $repository->createQueryBuilder('p')
            ->where('p.date  BETWEEN :dateStart AND :dateEnd')
            ->setParameter('dateStart', $requestedDate . ' 00:00:00')
            ->setParameter('dateEnd', $requestedDate . ' 23:59:59')
            ->orderBy('p.date', 'ASC')
            ->getQuery();

        $eventsList = $query->getResult();

        return $this->render('CUESViewBundle:Events:listDate.html.twig', array('eventsList' => $eventsList));
    }

    /**
     * @Route("/events/{date}/{event}")
     * @Route("/events/{date}/{event}/")
     * @Template()
     */
    public function showEventAction($date,$event)
    {
        $inputDateTime = new DateTime($date);
        $requestedDate = $inputDateTime->format('Y-m-d');

        $repository = $this->getDoctrine()->getRepository('CUESViewBundle:event');
        $query = $repository->createQueryBuilder('p')
            ->where('p.shortTitle = :eventTitle AND p.date BETWEEN :dateStart AND :dateEnd')
            ->setParameter('dateStart', $requestedDate . ' 00:00:00')
            ->setParameter('dateEnd', $requestedDate . ' 23:59:59')
            ->setParameter('eventTitle', $event)
            ->getQuery();

        $event=$query->getResult();

        return $this->render('CUESViewBundle:Events:show.html.twig',array('event' => $event));
    }


    public function listEventsAction()
    {
        $eventsList = $this->getDoctrine()->getRepository('CUESViewBundle:event')->findAll();

        return $this->render('CUESViewBundle:Events:list.html.twig',array('eventsList' => $eventsList));

    }
}
