<?php

namespace Bbd\BongoCricketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BbdBongoCricketBundle:Default:index.html.twig', array('name' => $name));
    }
}
