<?php

require_once ("pateserie.php");
require_once ("eclair.php");
require_once ("religieuse.php");


echo"<br><b>PATISSERIE:</b>  ";
    $patisserie = new Patisserie(0.1, 3.5, 3.00);
    $patisserie->presentation();

echo"<br>";
echo"<br><b>PATISSERIE CHANGER :</b>  ";
    
    $patisserie->setPoids(0.5);
    $patisserie->setNote(4.3);
    $patisserie->setPrix(4.00);
    $patisserie->presentation();

echo"<br>";
echo"<br><b>ECLAIR :</b>";    
    $eclair=new Eclair("chocolat","vanille", 10);
    $eclair->affichage();

echo"<br>";
echo"<br><b>ECLAIR CHANGER :</b>";      
    $eclair->getchangerGlacage("cafe");
    $eclair->getchangerCreme("fraise");
    $eclair->affichage();


echo"<br>";
echo"<br><b>RELIGIEUSE :</b>"; 
    $religieuse=new Religieuse("chocolat","choco","non");
    $religieuse->afficherReligieuse();

    echo"<br>";
    echo"<br><b>RELIGIEUSE CHANGER:</b>";     
    $religieuse->getModifierPremiereBoule("café");
    $religieuse->getModifierDeuxiemeBoule("vanille");
    $religieuse->setChantille(true);
    $religieuse->afficherReligieuse();

?>










