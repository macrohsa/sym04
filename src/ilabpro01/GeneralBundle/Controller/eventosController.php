<?php

namespace ilabpro01\GeneralBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ilabpro01\GeneralBundle\Entity\eventos;
use ilabpro01\GeneralBundle\Form\eventosType;

/**
 * eventos controller.
 *
 * @Route("/eventos")
 */
class eventosController extends Controller
{
    /**
     * Lists all eventos entities.
     *
     * @Route("/", name="eventos")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ilabpro01GeneralBundle:eventos')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new eventos entity.
     *
     * @Route("/", name="eventos_create")
     * @Method("POST")
     * @Template("ilabpro01GeneralBundle:eventos:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new eventos();
        $form = $this->createForm(new eventosType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('eventos_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new eventos entity.
     *
     * @Route("/new", name="eventos_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new eventos();
        $form   = $this->createForm(new eventosType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a eventos entity.
     *
     * @Route("/{id}", name="eventos_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:eventos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find eventos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing eventos entity.
     *
     * @Route("/{id}/edit", name="eventos_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:eventos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find eventos entity.');
        }

        $editForm = $this->createForm(new eventosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing eventos entity.
     *
     * @Route("/{id}", name="eventos_update")
     * @Method("PUT")
     * @Template("ilabpro01GeneralBundle:eventos:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01GeneralBundle:eventos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find eventos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new eventosType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('eventos_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a eventos entity.
     *
     * @Route("/{id}", name="eventos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ilabpro01GeneralBundle:eventos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find eventos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('eventos'));
    }

    /**
     * Creates a form to delete a eventos entity by id.
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
