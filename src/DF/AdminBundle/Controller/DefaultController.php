<?php

namespace DF\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DFAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
