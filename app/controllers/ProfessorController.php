<?php 
 class ProfessorController extends Controller{
     
    public function __construct()
    {
        $this->professorModel = $this->model('Professor');
    }
    public function addProfessor(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->view('pages/addProfessor');
         }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data =  $_POST;

            if(!$this->postValid($data)){
                unset($data);
                unset($_POST);
                
                return;
            }
            // if(!($this->validNumber($data['phone']) && $this->validNumber($data['matricule']) )){
            //     unset($data);
            //     unset($_POST);
            //     // $this->view('pages/professors');
            //     return;
            // }
            // echo empty($_FILES);
           $this->professorModel->addProfessor($data);
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
      
        $this->view('pages/professors', $allProfessors);
    }
    
}