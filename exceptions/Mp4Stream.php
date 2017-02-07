<?php

require_once('RatedRException.php');
require_once('NoSubscriptionException.php');

require_once('User.php');
require_once('Movie.php');

class Mp4Stream {
    //put your code here
    
    protected static $apiServer = "http://api.netflix.com/";
    
    public static function getMp4Stream(Movie $movie, User $user)
    {
        if($user->getSubscription() == false)
        {
            throw new NoSubscriptionException();
        }
        
        if($movie->getRating() == "R" && $user->getAge() < 17)
        {
            throw new RatedRException();
        }
        
        return self::$apiServer . $movie->getTitle() . ".mp4";
        
    }
    
}
