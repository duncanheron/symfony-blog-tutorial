<?php

namespace FindA\FindABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('FindAFindABundle:Default:index.html.twig', array('name' => $name));
    }
}
