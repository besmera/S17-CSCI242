<?php

namespace Besmer\Controller;

use Besmer\Model\PersonHelper;

class PeopleController {
    
    //fill this in
    public function people()
    {
        $args = array();
        
        $templDir = dirname(__FILE__) . "/../views/";
        
        
        $loader = new \Twig_Loader_Filesystem($templDir);
        $twig = new \Twig_Environment($loader);
                        
        $people = PersonHelper::fetchPeople();
        
        $args["people"] = $people;
        
        return $twig->render("people.html.twig", $args);
    }
    
    public function person($id)
    {
        $args = array();
        
        $templDir = dirname(__FILE__) . "/../views/";
        
        
        $loader = new \Twig_Loader_Filesystem($templDir);
        $twig = new \Twig_Environment($loader);
                        
        $person = PersonHelper::fetchPerson($id);
        
        $args["person"] = $person;
        
        return $twig->render("person.html.twig", $args);        
    }
    
}