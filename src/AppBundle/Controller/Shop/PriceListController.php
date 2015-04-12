<?php

namespace AppBundle\Controller\Shop;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Shop\PriceList;
use AppBundle\Form\Shop\PriceListType;

/**
 * Shop\PriceList controller.
 *
 * @Route("/shop_pricelist")
 */
class PriceListController extends Controller
{

    /**
     * Lists all Shop\PriceList entities.
     *
     * @Route("/", name="shop_pricelist")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Shop\PriceList')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Shop\PriceList entity.
     *
     * @Route("/", name="shop_pricelist_create")
     * @Method("POST")
     * @Template("AppBundle:Shop\PriceList:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new PriceList();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('shop_pricelist_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Shop\PriceList entity.
     *
     * @param PriceList $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PriceList $entity)
    {
        $form = $this->createForm(new PriceListType(), $entity, array(
            'action' => $this->generateUrl('shop_pricelist_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Shop\PriceList entity.
     *
     * @Route("/new", name="shop_pricelist_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new PriceList();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Shop\PriceList entity.
     *
     * @Route("/{id}", name="shop_pricelist_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Shop\PriceList')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Shop\PriceList entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Shop\PriceList entity.
     *
     * @Route("/{id}/edit", name="shop_pricelist_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Shop\PriceList')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Shop\PriceList entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Shop\PriceList entity.
    *
    * @param PriceList $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PriceList $entity)
    {
        $form = $this->createForm(new PriceListType(), $entity, array(
            'action' => $this->generateUrl('shop_pricelist_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Shop\PriceList entity.
     *
     * @Route("/{id}", name="shop_pricelist_update")
     * @Method("PUT")
     * @Template("AppBundle:Shop\PriceList:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Shop\PriceList')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Shop\PriceList entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('shop_pricelist_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Shop\PriceList entity.
     *
     * @Route("/{id}", name="shop_pricelist_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Shop\PriceList')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Shop\PriceList entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('shop_pricelist'));
    }

    /**
     * Creates a form to delete a Shop\PriceList entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('shop_pricelist_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
