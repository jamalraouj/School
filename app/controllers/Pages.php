<?php
  class Pages extends Controller{
    public function __construct(){
      
      $this->professorModel = $this->model('Professor');

      $this->adminModel = $this->model('admin');

    }
    public function index(){
      unset($_SESSION);
      $data = [
        'title' => 'Login',
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
    public function updateprofessor(){
     
      $data = [
        'title' => 'Update Professor'
      ];
      $this->view('pages/updateprofessor', $data);
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
      $data = [
        'title' => 'professors'
      ];
      $this->view('pages/professors', $data);
    }
    public function addProfessor(){
      $data = [
        'title' => 'addProfessor'
      ];
      $this->view('pages/addProfessor', $data);
    }
    public function login(){
      $data = [
        'title' => 'loginr'
      ];
      $this->view('pages/login', $data);
    }
    // public function login(){
    //   $data = [
    //     'title' => 'loginr'
    //   ];

    //   $this->view('pages/login', $data);
    // }

    public function tableAdmin(){
      $data = $this->adminModel->getAdmins();
      $this->view('pages/admins', $data);
    }

    public function dashborad(){
      $data = [
        'title' => 'dashborad'
      ];

      $this->view('pages/dashborad', $data);
    }
    
    public function students(){
      $data = [
        'title' => 'students'
      ];

      $this->view('pages/students',$data);
    }
    public function tableStudiant(){

      $data = $this->studentModel->getStudent();
      $this->view('pages/Sudents',$data);
    }
    
   
  }