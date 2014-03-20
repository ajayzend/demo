<?php

namespace Anthony\Bundle\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($city)
    {
        return $this->render('AnthonyCrudBundle:Default:index.html.twig', array('city' => $city));
    }
}
