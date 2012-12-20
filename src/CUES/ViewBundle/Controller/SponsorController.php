<?php
namespace CUES\ViewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use CUES\ViewBundle\Entity\mainSponsor;

class SponsorController extends Controller
{
    public function showSponsorsAction($currentPageValue = null)
    {
        $mainSponsors = $this->getDoctrine()->getRepository('CUESViewBundle:mainSponsor')->findAll();;
        $this->shuffleWithKeys($mainSponsors);

        $associateSponsors = $this->getDoctrine()->getRepository('CUESViewBundle:associateSponsor')->findAll();;
        $this->shuffleWithKeys($associateSponsors);

        return $this->render('CUESViewBundle:Sponsors:sponsors.html.twig',array('mainSponsors' => $mainSponsors,'associateSponsors' => $associateSponsors));
    }
}
