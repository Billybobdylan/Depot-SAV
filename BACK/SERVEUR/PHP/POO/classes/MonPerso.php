<?php
require "Personnage.class.php";


    $p = new Personnage();
    $p->setNom("Lebowski");
    $p->setPrenom("Jeff");
    $p->setAge(33);
    $p->setSexe("H");

    var_dump ($p);


?>