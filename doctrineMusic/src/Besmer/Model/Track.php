<?php


namespace Besmer\Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 */
class Track {
    
     /**
     *
     * @ODM\Id
     */
    protected $id;

     /**
     *
     * @ODM\Field(type="int")
     */
    protected $length = 0;
    
    /**
     *
     * @ODM\Field(type="string")
     */
    protected $name = "";
    
    public function __construct() {
        
    }

    public function getLength() {
        return $this->length;
    }

    public function getName() {
        return $this->name;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    
}
