<?php

namespace ilabpro01\BackAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ilabpro01BackAdminBundle:Default:index.html.twig');
    }
}
