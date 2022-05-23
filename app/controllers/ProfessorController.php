<?php 
 class ProfessorController extends InfoController{
     private $classe;
     private $matiere;
     private $phone;
     private $id_pro;
    public function __construct()
    {
        $this->professorModel = $this->model('Professor');
    }
    public function addProfessor(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->view('pages/addProfessor');
         }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data =  $_POST;unset($_POST);

            if(!$this->postValid($data)){
                unset($data);
                return;
            }
            $this->setNomComplet($data['name']);
            $this->setGenre($data['genre']);
            $this->setMatricule($data['matricule']);
            $this->setImg_profile($data['img_profile']);
            $this->classe = $data['class'];
            $this->matiere =$data['matiere'];
            $this->phone = $data['phone'];
            // $this->id_pro = $data['id_pro'];

             $this->professorModel->addProfessor($this->getNomComplet() , $this->getGenre() ,$this->getMatricule() ,$this->classe ,$this->matiere ,$this->phone);
            // if(!($this->validNumber($data['phone']) && $this->validNumber($data['matricule']) )){
            //     unset($data);
            //     unset($_POST);
            //     // $this->view('pages/professors');
            //     return;
            // }
            // echo empty($_FILES);
          
        //    $this->view('pages/professors');
        //    self::getAllProfessors();
        header("location:".URLROOT ."/pages/professors");
         }
    }
    public function deletePro(){
        if(isset($_GET['id'])){
            
        $this->professorModel->delete($_GET['id']);
        // self::getAllProfessors();
        header("location:".URLROOT ."/pages/professors");

     }
    }

    public function getAllProfessors(){
    //    $allProfessors = $this->professorModel->getAllProfessors();
       
    //     $this->view('pages/professors', $allProfessors);
        $allProfessors = $this->professorModel->getAllProfessors();
      
        $this->view('pages/professors',  $allProfessors);
    }
    public function showprofessor(){
        if(isset($_GET['id'])){
            $this->id_pro = $_GET['id'];
            $data = $this->professorModel->getProfessor($this->id_pro);
            // header("location:".URLROOT ."/pages/updateprofessor");
            $this->view('pages/updateprofessor',(array) $data);
        }
    }

    public function updateProfessor(){
        // if(isset($_POST)){

            $data = $_POST;
            // unset($_POST);
            // if(!$this->postValid($data)){
            //     unset($data);
            //     return;
            // }
            $this->id_pro = $_GET['id'];
            $this->setNomComplet($data['name']);
            $this->setGenre($data['genre']);
            $this->setMatricule($data['matricule']);
            // $this->setImg_profile($data['img_profile']);
            $this->classe = $data['class'];
            $this->matiere =$data['matiere'];
            $this->phone = $data['phone'];
            $this->professorModel->updateprofessor($this->id_pro,$this->getNomComplet() , $this->getGenre() , $this->getMatricule() , $this->classe ,$this->matiere ,$this->phone);
            header("location:".URLROOT ."/pages/professors");

    }
}