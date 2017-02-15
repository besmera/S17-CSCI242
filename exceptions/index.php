<?php

require_once('User.php');
require_once('Movie.php');
require_once('Mp4Stream.php');

require_once('RatedRException.php');
require_once('NoSubscriptionException.php');


$alice = new User();
//$alice->setSubscription(true);
$alice->setSubscription(false);
$alice->setAge(16);

$home = new Movie();
$home->setLength(90);
$home->setTitle("Home");
$home->setRating("G");

$kickass = new Movie();
$kickass->setLength(120);
$kickass->setTitle("Kickass");
$kickass->setRating("R");

//echo Mp4Stream::getMp4Stream($home, $alice);

/*
try
{
    echo Mp4Stream::getMp4Stream($kickass, $alice);
} catch (RatedRException $ex) {
    echo "You must be 17 to watch a movie rated R.";
}
catch (NoSubscriptionException $ex) {
    echo "You must have a subscription first.";
}
catch (Exception $ex)
{
    echo "Something happened, we will report it!";
}
*/

echo watchMovie($alice, $kickass);




function watchMovie($user, $movie)
{
    try{
        return Mp4Stream::getMp4Stream($movie, $user);
    } catch (RatedRException $ex) {
         //send a mail to the admin
         throw new RatedRException();
    }
    catch (NoSubscriptionException $ex) {
        //send a mail to the admin
        throw new NoSubscriptionException();
    }
    catch (Exception $ex)
    {
        throw new Exception();
        //send a mail to the admin
    }

}



