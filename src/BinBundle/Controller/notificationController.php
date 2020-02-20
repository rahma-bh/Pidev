<?php

namespace BinBundle\Controller;

use BinBundle\Entity\notification;
use BinBundle\Form\notificationType;
use BinBundle\Form\updateNotificationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class notificationController extends Controller
{
    public function addAction(Request $request)
    {
        $notification = new notification();
        $form = $this->createForm(notificationType::class, $notification);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($notification);
            $em->flush();
            return $this->redirectToRoute('listnot');
        }
        return $this->render('@Bin\notification\add.html.twig', array('form' => $form->createView()));
    }
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $notifications = $em->getRepository("BinBundle:notification")
            ->findAll();
        return $this->render('@Bin/notification/list.html.twig',array(
            'notifications'=>$notifications
        ));
    }
    public function deleteAction($id){

        $em = $this->getDoctrine()->getManager();
        $rec = $em->getRepository('BinBundle:notification')->find($id);
        $em->remove($rec);
        $em->flush();



        return $this->redirectToRoute('listnot');

    }
    public function updateAction(Request $request, $id)
    {
        $notification= $this->getDoctrine()->getmanager()->getRepository(notification::class)->find($id);
        $form= $this->createForm(updateNotificationType::class,$notification);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($notification);
            $em->flush();
            return $this->redirectToRoute("listnot");
        }
        return $this->render("@Bin/notification/update.html.twig",array("form"=>$form->createView()));


    }
    public function treatAction( $id)
    {

        $notification = $this->getDoctrine()->getManager();
        $em = $notification->getRepository('BinBundle:notification')->find($id);


        if (!$em) {
            throw $this->createNotFoundException(
                'No notification found for id '.$id
            );
        }
        $em->setState(true);
        $notification->flush();
        return $this->redirectToRoute('listnot');

    }
}