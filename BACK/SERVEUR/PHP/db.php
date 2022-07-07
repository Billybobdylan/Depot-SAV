<?php
function ConnexionBase() {

    try 
    {
        $connexion = new PDO('mysql:host=localhost;dbname=record;charset=utf8', 'dylan', 'mariadb5880');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;
    } 
    catch (Exception $e) 
    {
        echo 'Erreur : ' . $e->getMessage() . '<br />';
        echo 'N° : ' . $e->getCode();
        die('Fin du script');
    }
}
?>