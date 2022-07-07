<?php
// ICI déclarez la classe

$mobile = new Produit; //Instanciation

$mobile->setNom("iphone");
$mobile->setQuantite(10);
$mobile->setPrix(900);
$mobile->setRupture(false);

echo $mobile->afficheProduit();
?>