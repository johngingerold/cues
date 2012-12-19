<?php

namespace CUES\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function showMenuAction($currentPageValue = null)
    {
        $menuItems = array(
            'Home' => $this->generateUrl('cues_admin_default_index'),
            'Membership Manager' => $this->generateUrl('cues_admin_user_list'),
            'Send Email' => $this->generateUrl('cues_admin_email_new'),
            'Create News Item' => $this->generateUrl('cues_admin_news_new'),
            'Manage Event' => $this->generateUrl('cues_admin_events_list')

        );

        if (is_null($currentPageValue)) {
            $currentPageValue = $this->getRequest()->getRequestUri();
        }

        return $this->render('CUESAdminBundle:Menu:menu.html.twig',array('menuItems' => $menuItems, 'currentPageValue' => $currentPageValue));
    }
}
