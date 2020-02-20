<?php

namespace BinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SupportController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('from', EmailType::class)
        ->add('message', TextareaType::class)
        ->add('send',  SubmitType::class)
        ->getForm()
    ;

        $form->handleRequest($request); // the new line
        if ($form->isSubmitted() && $form->isValid()) {
            // condition is met only if the form has been
            // submitted, and passed validation checks
            $data = $form->getData();
             dump($data);


            $message = \Swift_Message::newInstance()
                ->setSubject('Contact Form Submission')
                ->setFrom($form->getData()['from'])
                ->setTo('srxoexyq@sharklasers.com')
                ->setBody(
                    $form->getData()['message'],
                    'text/plain'
                )
            ;

            $this->get('mailer')->send($message);
        }

        return $this->render('support/index.html.twig', [
            'our_form' => $form->createView(),
        ]);
        }}



