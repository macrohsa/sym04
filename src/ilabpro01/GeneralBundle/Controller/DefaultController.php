<?php

namespace ilabpro01\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    
    /**
     * Lists all fotografo entities.
     *
     * @Route("/hello", name="foto1")
     * @return type
     */
    public function indexAction()
    {
        return $this->render('ilabpro01GeneralBundle:Default:index.html.twig');
    }
    
    
    
    
}
