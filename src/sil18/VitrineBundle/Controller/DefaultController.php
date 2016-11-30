<?php

namespace sil18\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('sil18VitrineBundle:Default:index.html.twig',
                array('name' => $name));
    }
    
    public function mentionsAction() {
        return $this->render('sil18VitrineBundle:Default:mentions.html.twig');
    }
}
