<?php

namespace CUES\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UserController extends Controller
{
    /**
     * @route("/users")
     * @template()
     */
    public function listAction()
    {
        return array();
    }

    /**
     * @route("/users/{user}")
     * @template()
     */
    public function manageAction($user)
    {
        return array('user'=>$user, 'currentPageValue'=>$this->generateUrl('cues_admin_user_list'));
    }
}
