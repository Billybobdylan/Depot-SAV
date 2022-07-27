

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

$mag1= new Magasins("Dubonheur", "465 avenue Chaus.Brunehaut", 62150, "Gauchin-Légal");
$mag2= new Magasins("Dusud", "25 Rue de la Pépinière Robin", 66000, "Perpignan");
$mag3= new Magasins("Dubeurresalé", "3 Rue Kerneuzec", 29300, "Quimperlé");
$mag4= new Magasins("DunouveauAllemand", "175 Route de Dachstein", 67120, "Molsheim");
$mag5= new Magasins("Durien", "10 Avenue du Tour de France", 18200, "Saint-Amand-Montrond");

//var_dump($mag1);
/*var_dump($mag2);
var_dump($mag3);
var_dump($mag4);
var_dump($mag5);*/


$emp1= new Employe("Nhoj", "John" , "22-02-2021", "Bourg pif", 32000, "Casse");
$emp2= new Employe("De Cuivrevent", "Carpophorus" , "15-10-2009", "Bourg uignon", 50000, "Arèna");
$emp3= new Employe("Bar", "Lenny", "12-12-2000", "Bourg enBresse", 28950, "Cage au lion");
$emp4= new Employe("Delapuerta", "Alfredo", "03-03-1997", "Bourg eois", 75200, "PDG");
$emp5= new Employe("Jemes", "Jessie", "30-09-2012", "Bourg saint maurice", 19885, "Ski");



//var_dump($emp1); 
/*var_dump($emp2);
var_dump($emp3);
var_dump($emp4);
var_dump($emp5);*/



$datetest= $emp1->verifdate();
 



 
$total1 = $emp1->prime();
$total2 = $emp2->prime();
$total3 = $emp3->prime();
$total4 = $emp4->prime();
$total5 = $emp5->prime();


echo "La prime de John est de ",$total1, '€ <br>' ;
echo "La prime de Carpophorus est de ",$total2, '€ <br>' ;
echo "La prime de Lenny est de ",$total3, '€ <br>' ;
echo "La prime de Alfredo est de ",$total4, '€ <br>' ;
echo "La prime de Jessie est de ",$total5, '€ <br>' ;

$nom1 = $emp1->getPrenom();
$nom2 = $emp2->getPrenom();
$nom3 = $emp3->getPrenom();
$nom4 = $emp4->getPrenom();
$nom5 = $emp5->getPrenom();
$sin1 = $mag1->getName();
$sin2 = $mag2->getName();
$sin3 = $mag3->getName();
$sin4 = $mag4->getName();
$sin5 = $mag5->getName();
$loc1 = $mag1->getVille();
$loc2 = $mag2->getVille();
$loc3 = $mag3->getVille();
$loc4 = $mag4->getVille();
$loc5 = $mag5->getVille();

echo $nom1," travaille le magasin ",$sin1," qui ce trouve à ",$loc1,'<br>';
echo $nom2," travaille le magasin ",$sin2," qui ce trouve à ",$loc2,'<br>';
echo $nom3," travaille le magasin ",$sin3," qui ce trouve à ",$loc3,'<br>';
echo $nom4," travaille le magasin ",$sin4," qui ce trouve à ",$loc4,'<br>';
echo $nom5," travaille le magasin ",$sin5," qui ce trouve à ",$loc5,'<br>';
