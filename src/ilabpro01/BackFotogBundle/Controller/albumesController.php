<?php

namespace ilabpro01\BackFotogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ilabpro01\BackFotogBundle\Entity\albumes;
use ilabpro01\BackFotogBundle\Form\albumesType;

/**
 * albumes controller.
 *
 * @Route("/albumes")
 */
class albumesController extends Controller
{
    /**
     * Lists all albumes entities.
     *
     * @Route("/", name="albumes")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ilabpro01BackFotogBundle:albumes')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new albumes entity.
     *
     * @Route("/", name="albumes_create")
     * @Method("POST")
     * @Template("ilabpro01BackFotogBundle:albumes:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new albumes();
        $form = $this->createForm(new albumesType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('albumes_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new albumes entity.
     *
     * @Route("/new", name="albumes_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new albumes();
        $form   = $this->createForm(new albumesType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a albumes entity.
     *
     * @Route("/{id}", name="albumes_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01BackFotogBundle:albumes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find albumes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing albumes entity.
     *
     * @Route("/{id}/edit", name="albumes_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01BackFotogBundle:albumes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find albumes entity.');
        }

        $editForm = $this->createForm(new albumesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing albumes entity.
     *
     * @Route("/{id}", name="albumes_update")
     * @Method("PUT")
     * @Template("ilabpro01BackFotogBundle:albumes:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01BackFotogBundle:albumes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find albumes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new albumesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('albumes_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a albumes entity.
     *
     * @Route("/{id}", name="albumes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ilabpro01BackFotogBundle:albumes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find albumes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('albumes'));
    }

    /**
     * Creates a form to delete a albumes entity by id.
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
