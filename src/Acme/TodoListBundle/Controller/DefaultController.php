<?php

namespace Acme\TodoListBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('AcmeTodoListBundle:Default:index.html.twig', array('name' => $name));
    }
}
