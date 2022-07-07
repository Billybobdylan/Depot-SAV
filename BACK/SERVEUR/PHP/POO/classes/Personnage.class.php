<?php

class Personnage
{
    private $nom;
    private $prenom;
    private $age;
    private $sexe;
   
 
    public function setNom($nom)
    {
        $this->nom = $nom;
        
        return $this;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }


    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

}

?>