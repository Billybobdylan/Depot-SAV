<?php

    class Employe
    {
        private $nom;
        private $prenom;
        private $embauche;
        private $fonction;
        private $salaire;
        private $service;
        

        public function __construct($nom, $prenom, $embauche, $fonction, $salaire, $service)
        {
                $date= new DateTime("now");
                $this->nom = $nom;
                $this->prenom = $prenom;
                $this->embauche = new DateTime($embauche);
                $this->difference = $date->diff(new DateTime($embauche));
                $this->fonction = $fonction;
                $this->salaire = $salaire;
                $this->service = $service;

// //var_dump($date->format("d/m/Y"));
// echo($this->difference->format("%y")."ans");



        }


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

        public function setEmbauche($embauche)
        {      
                $this->embauche = $embauche;

                return $this;
        }
        
       
   
        public function setFonction($fonction)
        {
                $this->fonction = $fonction;

                return $this;
        }
    
        public function setSalaire($salaire)
        {
                $this->salaire = $salaire;

                return $this;
        }

        public function setService($service)
        {
                $this->service = $service;

                return $this;
        }

         
        public function getEmbauche()
        {
                return $this->embauche;
        }

    /*    public function dateemb()
{
        $aujour= date_create("y");
    
       $diff= date_diff($aujour, $embauche);

       return $diff->format("%y");
       
}*/
      public function anciennete() {

        return $this->difference;
      }

        public function prime()
{
        $sal = $this->salaire;
        $anc = $this->anciennete();
     
               
                $pou = 2 * $anc; 
                $ann = $pou * $sal;
                $re = $ann / 100;
                $resu = $sal + $re;
             
        // }
       return $resu;

// echo($resu);
}
     
        
    }


?>