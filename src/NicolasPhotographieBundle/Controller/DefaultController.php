<?php

namespace NicolasPhotographieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homepageAction()
    {
        return $this->render('@NicolasPhotographie/Default/homepage.html.twig');
    }

    public function biographieAction()
    {
    	return $this->render('@NicolasPhotographie/Default/biographie.html.twig');
    }

    public function contactAction()
    {
    	return $this->render('@NicolasPhotographie/Default/contact.html.twig');
    }

    public function portfolioAction()
    {
    	return $this->render('@NicolasPhotographie/Default/portfolio.html.twig');
    }

    public function mariageAction()
    {
    	return $this->render('@NicolasPhotographie/Default/mariage.html.twig');
    }

    public function visionAction()
    {
    	return $this->render('@NicolasPhotographie/Default/vision.html.twig');
    }
}
