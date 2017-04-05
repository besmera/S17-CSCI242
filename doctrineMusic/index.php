<?php

require_once ("bootstrap.php");

//$dm will exist

use Besmer\Model\Album;
use Besmer\Model\Track;

/** Inserting into the database
$sweetEscape = new Album();
$sweetEscape->setArtist("Gwen Stefani");
$sweetEscape->setTitle("Sweet Escape");

$dm->persist($sweetEscape);

$dm->flush();
*/

/*** Selection from the database 

$albumRepo = $dm->getRepository("Besmer\Model\Album");

$results = $albumRepo->findBy(array());

//var_dump($results);

echo $results[0]->getArtist();

*/

/*** Modification from the database

$albumRepo = $dm->getRepository("Besmer\Model\Album");

$gwen = $albumRepo->findOneBy(array("artist" => "Gwen Stefani"));

echo $gwen->getArtist();

$gwen->setArtist("Gwen");

$dm->flush();


$albumRepo = $dm->getRepository("Besmer\Model\Album");

$results = $albumRepo->findBy(array("artist" => "Gwen Stefani"));

//var_dump($results);

echo $results[0]->getArtist();

*/

/*
$albumRepo = $dm->getRepository("Besmer\Model\Album");

$results = $albumRepo->findBy(array("artist" => "Gwen"));

//var_dump($results);

foreach($results as $result)
{
    $dm->remove($result);
}

$dm->flush();
 
 */


/* Embedded Insert works because of cascade all */

$sweetEscape = new Album();
$sweetEscape->setArtist("Gwen Stefani");
$sweetEscape->setTitle("Sweet Escape");

$dm->persist($sweetEscape);

$track1 = new Track();
$track1->setName("Holla Back Girl");
$track1->setLength(200);

$sweetEscape->setTrack($track1);

$track2 = new Track();
$track2->setName("The Sweet Escape");
$track2->setLength(180);

$sweetEscape->setTrack($track2);

$dm->flush();

