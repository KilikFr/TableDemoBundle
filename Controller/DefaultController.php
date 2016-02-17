<?php

namespace Kilik\TableDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="tabledemo_index")
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }

    /**
     * @Route("/test", name="testAngular")
     * @Template()
     */
    public function testAngularAction()
    {
        return [];
    }

}
