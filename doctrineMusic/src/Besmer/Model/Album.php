<?php

namespace Besmer\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Besmer\Model\Track;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 */
class Album {
    
    /**
     *
     * @ODM\Id
     */
    protected $id;
    
    /**
     * @ODM\Field(type="string")
     */
    protected $artist = "";
    
    /**
     * @ODM\Field(type="string")
     */
    protected $title = "";
    
    /**
     * @ODM\ReferenceMany(targetDocument="Track", cascade={"all"})
     */
    protected $tracks;
    
    public function __construct() {
        $this->tracks = new ArrayCollection();
    }
    
    public function getId() {
        return $this->id;
    }

        public function getArtist() {
        return $this->artist;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getTracks() {
        return $this->tracks;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setTrack(Track $track) {
        $this->tracks[] = $track;
    }
    
    public function removeTrack(Track $track) {
        $this->tracks->removeElement($track);
    }



    
}
