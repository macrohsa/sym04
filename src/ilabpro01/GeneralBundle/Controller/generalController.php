<?php

namespace ilabpro01\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ilabpro01\GeneralBundle\Entity\eventos;


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
     * @Route("/listapedidos", name="lista_pedidos")
     */
    public function listadoPedidosAction(){
        
        // Redirige al controlador fotografo para gestionar Fotógrafos
        $response = $this->forward('ilabpro01GeneralBundle:pedidos:index1');
        
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
    
    
    public function galeriaAction(){
       
       return $this->render('ilabpro01GeneralBundle:Default:galeria.html.twig');
        
   }
   
   
   public function galeria1Action(){
       
       return $this->render('ilabpro01GeneralBundle:Default:galeria1.html.twig');
        
   }
   
   public function galeria2Action(){
       
       return $this->render('ilabpro01GeneralBundle:Default:galeria2.html.twig');
        
   }
   
   
   public function productosEventoAction(){
       
       return $this->render('ilabpro01GeneralBundle:Default:productosEvento.html.twig');
        
   }
   
   
   public function loginEventoAction(){
       
       return $this->render('ilabpro01GeneralBundle:eventos:loginEvento.html.twig');
        
   }
   
}
