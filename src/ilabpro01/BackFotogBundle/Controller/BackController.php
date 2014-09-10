<?php

namespace ilabpro01\BackFotogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class BackController extends Controller
{
    
    
    /**
     * @Route("/hello", name="index")
     * @return type
     */
    public function indexAction()
    {
        return $this->render('ilabpro01BackFotogBundle:Back:loginFotog.html.twig');
    }
    
    
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(){
        
        return $this->render('ilabpro01BackFotogBundle:Back:index.html.twig');
    }
    
    
    /**
     * @Route("/perfil", name="perfil")
     */
    public function perfilAction(){
        
        return $this->render('ilabpro01BackFotogBundle:Back:perfil.html.twig');
    }
    
    
     /**
     * ABM Productos
     * 
     */
    
    /**
     * @Route("/listaprod", name="lista_productos")
     */
    public function listadoProductosAction(){
        
        // Redirige al controlador productos para gestionar Productos
        $response = $this->forward('ilabpro01GeneralBundle:productos:index');
        
        return $response;
    }
    
    
    
    /**
     * @Route("/pedidos", name="pedidos")
     */
    public function pedidosAction(){
        
        // Redirige al controlador pedidos para gestionar pedidos
        $response = $this->forward('ilabpro01GeneralBundle:pedidos:index');
        
        return $response;
    }
    
    
    /**
     * @Route("/preciosprod", name="precios_productos")
     */
    public function preciosProductosAction(){
        
        // Redirige al controlador precios para gestionar Precios de Productos
        $response = $this->forward('ilabpro01GeneralBundle:precioXproducto:index');
        
        return $response;
    }
    
    
    /**
     * @Route("/listaeventos", name="lista_eventos")
     */
    public function listadoEventosAction(){
        
        // Redirige al controlador eventos
        $response = $this->forward('ilabpro01GeneralBundle:eventos:index');
        
        return $response;
    }
    
    
    /**
     * @Route("/listausuarios", name="lista_usuarios")
     */
    public function listadoUsuariosAction(){
        
        // Redirige al controlador usuarios
        $response = $this->forward('ilabpro01GeneralBundle:usuarios:index');
        
        return $response;
    }
    
    
    /**
     * @Route("/planfot", name="plan_fot")
     */
    public function seleccionarPlanAction(){
       
       return $this->render('ilabpro01BackFotogBundle:Back:planfot.html.twig');
        
   }
   
   
   
   
    
}
