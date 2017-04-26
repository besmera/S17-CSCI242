<?php

namespace Besmer\TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        
        
        $x = rand(1,110);
        dump($x);
        
        return $this->render('BesmerTodoBundle:Default:index.html.twig');
    }
}
