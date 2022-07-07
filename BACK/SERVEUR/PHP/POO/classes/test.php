<?php
require "employe.php";
//$dat= getEmbauche();

// public function calculerprime($salaire)
// {
//         $sal = $salaire;
//         // while ($sal==22000){
//         $pou = 2 * 2;
//         $ann = $pou * $sal;
//         $re = $ann / 100;
//         $resu = $sal + $re;
             
//         // }
//        return $resu;
// }

// $emp1_nom = "John";
// $emp1_prenom = "Nhoj";
// $emp1_salaire = 32000;

// $emp1_prime = calculerprime($emp1_salaire);


$emp1= new Employe("John", "Nhoj", "22-02-2019", "Bourg pif", 32000, "Casse");
$emp2= new Employe("Carpophorus", "De Cuivrevent", "15-10-2009", "Bourg uignon", 50000, "Arèna");

var_dump($emp1); 
var_dump($emp2);
 
$total1 = $emp1->prime();
$total2 = $emp2->prime();

var_dump($total1);
var_dump($total2);

var_dump($emp1); 
var_dump($emp2);

