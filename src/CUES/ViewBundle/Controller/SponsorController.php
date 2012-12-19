<?php
namespace CUES\ViewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;

class SponsorController extends Controller
{
    public function showSponsorsAction($currentPageValue = null)
    {
        $mainSponsors2 = $this->getDoctrine()->getRepository('CUESViewBundle:mainSponsor');
        $mainSponsors = array(
            'http://www.bp.com' => 'images/SponsorLogos/sidebanner/BP_75.png',
            'http://www.rolls-royce.com' => 'images/SponsorLogos/sidebanner/RR_175.png',
        );
        $this->shuffleWithKeys($mainSponsors);

        $associateSponsors = array(
            'http://www.aecom.com' => 'images/SponsorLogos/sidebanner/Aecom_150.png',
            'http://www.arm.com' => 'images/SponsorLogos/sidebanner/ARM_150.png',
            'http://www.bp.com' => 'images/SponsorLogos/sidebanner/BP_75.png',
            'http://www.rolls-royce.com' => 'images/SponsorLogos/sidebanner/RR_175.png',
        );
        $this->shuffleWithKeys($associateSponsors);

        return $this->render('CUESViewBundle:Sponsors:sponsors.html.twig',array('mainSponsors' => $mainSponsors,'associateSponsors' => $associateSponsors));
    }
}
