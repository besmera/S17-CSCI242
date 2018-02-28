<?php


namespace Besmer\Model;

use Besmer\Model\Album;

/**
 * @Entity
 */
class Track {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

     /**
     *
     * @Column(type="integer")
     */
    protected $length = 0;
    
    /**
     *
     * @Column(type="string")
     */
    protected $name = "";

    /**
    * @ManyToOne(targetEntity="Album", inversedBy="tracks");
    */
    protected $album = null;
    
    public function __construct() {
        
    }

    public function getLength() {
        return $this->length;
    }

    public function getName() {
        return $this->name;
    }

    public function getAlbum() {
        return $this->album;
    }

    public function setAlbum(Album $album)
    {
        $this->album = $album;
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
