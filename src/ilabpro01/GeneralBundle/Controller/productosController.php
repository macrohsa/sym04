<?php

namespace ilabpro01\GeneralBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ilabpro01\GeneralBundle\Entity\productos;
use ilabpro01\GeneralBundle\Form\productosType;


/**
 * productos controller.
 *
 * @Route("/productos")
 */
class productosController extends Controller
{
    /**
     * Lists all productos entities.
     *
     * @Route("/", name="productos")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ilabpro01GeneralBundle:productos')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new productos entity.
     *
     * @Route("/", name="productos_create")
     * @Method("POST")
     * @Template("ilabpro01GeneralBundle:productos:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new productos();
        $form = $this->createForm(new productosType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('productos_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new productos entity.
     *
     * @Route("/new", name="productos_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new productos();
        $form   = $this->createForm(new productosType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a productos entity.
     *
     * @Route("/{id}", name="productos_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find productos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing productos entity.
     *
     * @Route("/{id}/edit", name="productos_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find productos entity.');
        }

        $editForm = $this->createForm(new productosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing productos entity.
     *
     * @Route("/{id}", name="productos_update")
     * @Method("PUT")
     * @Template("ilabpro01GeneralBundle:productos:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find productos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new productosType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('productos_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a productos entity.
     *
     * @Route("/{id}", name="productos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ilabpro01GeneralBundle:productos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find productos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('productos'));
    }

    /**
     * Creates a form to delete a productos entity by id.
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
