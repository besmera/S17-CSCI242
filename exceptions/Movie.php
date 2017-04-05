<?php


class Movie {
    
    protected $title = "";
    protected $length = 0;
    protected $rating = "NR";
    
    public function __construct() {
        
    }

    public function getTitle() {
        return $this->title;
    }

    public function getLength() {
        return $this->length;
    }

    public function getRating() {
        return $this->rating;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function setRating($rating) {
        $this->rating = $rating;
    }


    
    
}
