<?php

namespace ilabpro01\GeneralBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ilabpro01\GeneralBundle\Entity\fotografo;
use ilabpro01\GeneralBundle\Form\fotografoType;

/**
 * fotografo controller.
 *
 * @Route("/fotografo")
 */
class fotografoController extends Controller
{
    /**
     * Lists all fotografo entities.
     *
     * @Route("/", name="fotografo")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ilabpro01GeneralBundle:fotografo')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new fotografo entity.
     *
     * @Route("/", name="fotografo_create")
     * @Method("POST")
     * @Template("ilabpro01GeneralBundle:fotografo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new fotografo();
        $form = $this->createForm(new fotografoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fotografo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new fotografo entity.
     *
     * @Route("/new", name="fotografo_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new fotografo();
        $form   = $this->createForm(new fotografoType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }
    
    
    
   
    

    /**
     * Finds and displays a fotografo entity.
     *
     * @Route("/{id}", name="fotografo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:fotografo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find fotografo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing fotografo entity.
     *
     * @Route("/{id}/edit", name="fotografo_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:fotografo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find fotografo entity.');
        }

        $editForm = $this->createForm(new fotografoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing fotografo entity.
     *
     * @Route("/{id}", name="fotografo_update")
     * @Method("PUT")
     * @Template("ilabpro01GeneralBundle:fotografo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:fotografo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find fotografo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new fotografoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fotografo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a fotografo entity.
     *
     * @Route("/{id}", name="fotografo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ilabpro01GeneralBundle:fotografo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find fotografo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fotografo'));
    }

    /**
     * Creates a form to delete a fotografo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
