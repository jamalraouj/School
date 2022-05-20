<?php
  class Pages extends Controller{
    public function __construct(){
      $this->professorModel = $this->model('Professor');
    }
    
    public function index(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
    public function register(){
     
      $data = [
        'title' => 'register'
      ];

      $this->view('pages/register', $data);
    }
    public function professors(){
      // array_push($data);
      // $data += array('title' => 'professors');
      // // array_push($data, 'title' => 'professors');
      // $data['title'] = 'professors';
      // $data = [
      //   'title' => 'professors'
      // ];
      // var_dump($data);
      // ProfessorController::getAllProfessors();
      // $this->professorModel = new Professor();
      // $allProfessors = $this->professorModel->getAllProfessors();
       $data = $this->professorModel->getAllProfessors();
      //  var_dump($data);
        $this->view('pages/professors', $data);

      // $getAllProfessors->getAllProfessors();
      // $allProfessors = $this->professorModel->getAllProfessors();
      // $this->view('pages/professors',$allProfessors);
    }
    public function addProfessor(){
      $data = [
        'title' => 'addProfessor'
      ];

      $this->view('pages/addProfessor', $data);
    }
    
    
   
  }