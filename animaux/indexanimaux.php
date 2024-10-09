<?php

require_once("animaux.php");
require_once("oiseaux.php");
require_once("autruche.php");
require_once("colibri.php");
require_once("felin.php");
require_once("lion.php");
require_once("tigre.php"); // Assuming you have a Tigre class defined


// Create an instance of Oiseaux
$oiseaux = new Colibri("Colibri", "0.10m", 0.02, "nectar");
echo $oiseaux->presentation() . "<br>";
echo $oiseaux->envoler() . "<br>";
echo $oiseaux->atterir() . "<br>";

echo"<br>";
$oiseaux = new Autruche("Autruche", "2.5m", 100, "herbivore");
echo $oiseaux->presentation() . "<br>";
echo $oiseaux->envoler() . "<br>";
echo $oiseaux->atterir() . "<br>";

echo"<br>";
$lion = new Lion("Lion", "1.2m", 190, "carnivore");
echo $lion->presentation() . "<br>";
echo $lion->chasser(). "<br>";
echo $lion->presentation(). "<br>";

echo"<br>";
$tigre = new Tigre("Tigre", "1.0m", 220, "carnivore");
echo $tigre->presentation() . "<br>";
echo $tigre->chasser(). "<br>";
echo $tigre->presentation(). "<br>";


?>