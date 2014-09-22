<?php

namespace ilabpro01\FrontBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ilabpro01\GeneralBundle\Entity\fotografo;
use ilabpro01\GeneralBundle\Form\fotografoType;
use ilabpro01\GeneralBundle\Entity\eventos;
use ilabpro01\GeneralBundle\Form\eventosType;

class FrontController extends Controller
{
    public function indexAction()
    {
        return $this->render('ilabpro01FrontBundle:Front:front.html.twig');
    }
    
    
    public function showFotogAction(){
        
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:fotografo')->find(2);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find fotografo entity.');
        }

        $editForm = $this->createForm(new fotografoType(), $entity);
        
         return $this->render(('ilabpro01FrontBundle:Front:showFotog.html.twig'),
         array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            
        ));
    }
    
    
    
    public function showEventosAction(){
        
//        $em = $this->getDoctrine()->getManager();
//
//        $entities = $em->getRepository('ilabpro01GeneralBundle:eventos')->findAll();
//        
//        if (!$entities) {
//            throw $this->createNotFoundException('Unable to find eventos entity.');
//        }
//
//        $editForm = $this->createForm(new eventosType(), $entities);
//        
//         return $this->render(('ilabpro01FrontBundle:Front:showEventos.html.twig'),
//         array(
//            'entity'      => $entities,
//            'edit_form'   => $editForm->createView(),
//            
//        ));
        
         $response = $this->forward('ilabpro01GeneralBundle:eventos:index1');
        
        return $response;
    }
    
    
    
    public function accesoEventosAction(){
        
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:fotografo')->find(2);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find fotografo entity.');
        }

        $editForm = $this->createForm(new fotografoType(), $entity);
        
         return $this->render(('ilabpro01FrontBundle:Front:showFotog.html.twig'),
         array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            
        ));
    }
    
}
