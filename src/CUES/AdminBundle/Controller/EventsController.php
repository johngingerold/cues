<?php

namespace CUES\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class EventsController extends Controller
{
    /**
     * @Route("/events")
     * @Template()
     */
    public function listAction()
    {
        return array('currentPageValue' => $this->generateUrl('cues_admin_events_list'));
    }
    /**
     * @Route("/events/{event}")
     * @Template()
     */
    public function manageAction($event)
    {
        return array('event' => $event, 'currentPageValue' => $this->generateUrl('cues_admin_events_list'));
    }
}
