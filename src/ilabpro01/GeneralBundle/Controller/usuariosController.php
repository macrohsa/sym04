<?php

namespace ilabpro01\GeneralBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ilabpro01\GeneralBundle\Entity\usuarios;
use ilabpro01\GeneralBundle\Form\usuariosType;

/**
 * usuarios controller.
 *
 * @Route("/usuarios")
 */
class usuariosController extends Controller
{
    /**
     * Lists all usuarios entities.
     *
     * @Route("/", name="usuarios")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ilabpro01GeneralBundle:usuarios')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new usuarios entity.
     *
     * @Route("/", name="usuarios_create")
     * @Method("POST")
     * @Template("ilabpro01GeneralBundle:usuarios:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new usuarios();
        $form = $this->createForm(new usuariosType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('usuarios_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new usuarios entity.
     *
     * @Route("/new", name="usuarios_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new usuarios();
        $form   = $this->createForm(new usuariosType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a usuarios entity.
     *
     * @Route("/{id}", name="usuarios_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:usuarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find usuarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing usuarios entity.
     *
     * @Route("/{id}/edit", name="usuarios_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:usuarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find usuarios entity.');
        }

        $editForm = $this->createForm(new usuariosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing usuarios entity.
     *
     * @Route("/{id}", name="usuarios_update")
     * @Method("PUT")
     * @Template("ilabpro01GeneralBundle:usuarios:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:usuarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find usuarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new usuariosType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('usuarios_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a usuarios entity.
     *
     * @Route("/{id}", name="usuarios_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ilabpro01GeneralBundle:usuarios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find usuarios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('usuarios'));
    }

    /**
     * Creates a form to delete a usuarios entity by id.
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
