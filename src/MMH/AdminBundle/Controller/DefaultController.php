<?php

namespace MMH\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MMHAdminBundle:Default:index.html.twig');
    }
}
