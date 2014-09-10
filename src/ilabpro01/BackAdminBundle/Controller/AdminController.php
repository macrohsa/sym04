<?php

namespace ilabpro01\BackAdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdminController extends Controller {
    
    
    /**
     * @Route("/hello", name="index")
     * @return type
     */
    public function indexAction()
    {
        return $this->render('ilabpro01BackAdminBundle:Admin:login.html.twig');
    }
    
    
    /**
     * @Route("/login", name="login_back")
     */
    public function loginAction(){
        
        return $this->render('ilabpro01BackAdminBundle:Admin:index.html.twig');
    }




    /**
     * ABM Planes Fotógrafos
     * 
     */
    
    /**
     * @Route("/listaplan", name="lista_planes")
     */
    public function listadoPlanesAction(){
        
        // Redirige al controlador planFotografo para gestionar Planes Fotógrafos
        $response = $this->forward('ilabpro01BackAdminBundle:planFotografo:index');
        
        return $response;
    }
    
    
    
    
    
    
    /**
     * ABM Formas Pago Planes Fotógrafos
     */
    
    
    /**
     * @Route("/listafpago", name="lista_fpago")
     */
    public function listadoFormasPagoAction(){
        
        // Redirige al controlador formaPagoFotografo para gestionar Formas de Pago de Fotógrafos
        $response = $this->forward('ilabpro01BackAdminBundle:formaPagoFotografo:index');
        
        return $response;
        
    }
    
    


    


    

    
    
    
    
}
