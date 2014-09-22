<?php

namespace ilabpro01\BackFotogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ilabpro01\GeneralBundle\Entity\fotografo;
use ilabpro01\GeneralBundle\Form\fotografoType;


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
     * @Route("/listaprod", name="lista_productos")
     */
    public function listadoProductosAction(){
        
        // Redirige al controlador productos para gestionar Productos
        $response = $this->forward('ilabpro01GeneralBundle:productos:index');
        
        return $response;
    }
    
    
    /**
     * Displays a form to edit an existing fotografo entity.
     *
     * @Route("/{id}/edit", name="fotografo_edit")
     * @Method("GET")
     * @Template()
     */
    public function fotogEditAction(){
        
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:fotografo')->find(2);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find fotografo entity.');
        }

        $editForm = $this->createForm(new fotografoType(), $entity);
        
         return $this->render(('ilabpro01BackFotogBundle:Back:edit.html.twig'),
         array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            
        ));
    }
    
    public function fotogImagenAction(){
        
        
               
         return $this->render('ilabpro01BackFotogBundle:Back:imagenPerfil.html.twig');
    }
    
    /**
     * @Route("/pedidos", name="lista_pedidos")
     */
    public function listadoPedidosAction(){
        
        // Redirige al controlador pedidos para gestionar pedidos
        $response = $this->forward('ilabpro01GeneralBundle:pedidos:index');
        
        return $response;
    }
    
    
    public function listadoPendientesAction(){
        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ilabpro01GeneralBundle:pedidos')->findAll();

        
        return $this->render('ilabpro01BackFotogBundle:Back:pendientes.html.twig',
                array(
            'entities' => $entities,
        ));
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
