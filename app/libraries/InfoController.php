<?php  

   abstract class InfoController extends Controller{

        private $nom_complet;
        private $genre;
        private $matricule;
        private $img_profile;
        // getters
        public function getNomComplet(){
            return $this->nom_complet;
        }
        public function getGenre(){
            return $this->genre;
        }
        public function getMatricule(){
            return $this->matricule;
        }
        public function getImg_profile(){
            return $this->img_profile;
        }
        //setters
        public function setNomComplet($nom){
            $this->nom_complet = $nom;
          }
        public function setGenre($genre){
        $this->genre = $genre;
        }
        public function setMatricule($matricule){
        $this->matricule = $matricule;
        }
        public function setImg_profile($img_profile){
        $this->img_profile = $img_profile;
        }
        
        

    }

?>