<?php

namespace Besmer\Model;

use Besmer\Model\Person;

class PersonHelper {
    
    public static function fetchPeople()
    {
        $cwd = dirname(__FILE__);
        
        $json = file_get_contents($cwd . "/data/people.json");
        $json = json_decode($json, true);
        
        $result = array();
        
        foreach($json as $tempPerson)
        {
            $person = new Person();
            $person->setId($tempPerson['id']);
            $person->setName($tempPerson['name']);
            $person->setEmail($tempPerson['email']);
            
            $result[] = $person;
        }
        
        
        return $result;
                
    }
    
    public static function fetchPerson($id) {
        
        $people = PersonHelper::fetchPeople();
        
        $result = null;
        
        foreach($people as $person)
        {
            if($id == $person->getId())
            {
                $result = $person;
                break;
            }
        }
        
        return $result;
        
    }
    
}