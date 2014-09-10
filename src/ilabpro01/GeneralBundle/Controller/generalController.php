<?php

namespace ilabpro01\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class generalController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ilabpro01GeneralBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
    

    /**
     * ABM Fotógrafos
     * 
     */
    
    /**
     * @Route("/listafotog", name="lista_fotog")
     */
    public function listadoFotogAction(){
        
        // Redirige al controlador fotografo para gestionar Fotógrafos
        $response = $this->forward('ilabpro01GeneralBundle:fotografo:index');
        
        return $response;
    }
    
    
    
    
    /**
     * @Route("/hello", name="index")
     */
    public function volverLoginAction(){
        
        // Redirige al controlador fotografo
        $response = $this->forward('ilabpro01BackAdminBundle:Admin:login.html.twig');
        
        return $response;
    }
    
    
    
}
