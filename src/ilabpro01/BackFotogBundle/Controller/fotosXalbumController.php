<?php

namespace ilabpro01\BackFotogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ilabpro01\BackFotogBundle\Entity\fotosXalbum;
use ilabpro01\BackFotogBundle\Form\fotosXalbumType;

/**
 * fotosXalbum controller.
 *
 * @Route("/fotosxalbum")
 */
class fotosXalbumController extends Controller
{
    /**
     * Lists all fotosXalbum entities.
     *
     * @Route("/", name="fotosxalbum")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ilabpro01BackFotogBundle:fotosXalbum')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new fotosXalbum entity.
     *
     * @Route("/", name="fotosxalbum_create")
     * @Method("POST")
     * @Template("ilabpro01BackFotogBundle:fotosXalbum:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new fotosXalbum();
        $form = $this->createForm(new fotosXalbumType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fotosxalbum_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new fotosXalbum entity.
     *
     * @Route("/new", name="fotosxalbum_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new fotosXalbum();
        $form   = $this->createForm(new fotosXalbumType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a fotosXalbum entity.
     *
     * @Route("/{id}", name="fotosxalbum_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01BackFotogBundle:fotosXalbum')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find fotosXalbum entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing fotosXalbum entity.
     *
     * @Route("/{id}/edit", name="fotosxalbum_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01BackFotogBundle:fotosXalbum')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find fotosXalbum entity.');
        }

        $editForm = $this->createForm(new fotosXalbumType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing fotosXalbum entity.
     *
     * @Route("/{id}", name="fotosxalbum_update")
     * @Method("PUT")
     * @Template("ilabpro01BackFotogBundle:fotosXalbum:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ilabpro01BackFotogBundle:fotosXalbum')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find fotosXalbum entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new fotosXalbumType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fotosxalbum_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a fotosXalbum entity.
     *
     * @Route("/{id}", name="fotosxalbum_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ilabpro01BackFotogBundle:fotosXalbum')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find fotosXalbum entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fotosxalbum'));
    }

    /**
     * Creates a form to delete a fotosXalbum entity by id.
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
