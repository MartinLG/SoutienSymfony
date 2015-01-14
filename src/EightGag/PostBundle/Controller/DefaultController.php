<?php

namespace EightGag\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EightGagPostBundle:Default:index.html.twig', array('name' => $name));
    }
}
