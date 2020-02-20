<?php

namespace BinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BinBundle:Default:index.html.twig');
    }
    public function homeAction()
    {
        return $this->render('BinBundle:Default:home.html.twig');
    }
}
