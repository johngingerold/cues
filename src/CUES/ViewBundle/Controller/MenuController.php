<?php

namespace CUES\ViewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function showMenuAction($currentPageValue = null)
    {
        $repository = $this->getDoctrine()->getRepository('CUESViewBundle:menuItem');
		
		$query = $repository->createQueryBuilder('p')
				->where('p.active = :active')
    			->setParameter('active', 1)
				->orderBy('p.ordering', 'ASC')
				->getQuery();

		$menuItems = $query->getResult();


        if (is_null($currentPageValue)) {
            $currentPageValue = $this->getRequest()->getRequestUri();
        }

        return $this->render('CUESViewBundle:Menu:menu.html.twig',array('menuItems' => $menuItems, 'currentPageValue' => $currentPageValue));
    }
}
