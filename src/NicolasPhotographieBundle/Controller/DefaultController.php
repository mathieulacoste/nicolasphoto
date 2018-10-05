<?php

namespace NicolasPhotographieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homepageAction()
    {
        return $this->render('@NicolasPhotographie/Default/homepage.html.twig');
    }
}
