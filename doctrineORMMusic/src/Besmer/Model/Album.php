<?php

namespace Besmer\Model;

use Doctrine\Common\Collections\ArrayCollection;
//use Besmer\Model\Track;


/**
 * @Entity
 */
class Album {
    
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;
    
    /**
     * @Column(type="string")
     */
    protected $artist = "";
    
    /**
     * @Column(type="string")
     */
    protected $title = "";
    
    /**
     * @OneToMany(targetEntity="Track", mappedBy="album", cascade={"all"})
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
	$track->setAlbum($this);
    }
    
    public function removeTrack(Track $track) {
        $this->tracks->removeElement($track);
    }


}
