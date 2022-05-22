<?php
  class Pages extends Controller {
    public function __construct(){
      $this->adminModel = $this->model('admin');
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
      // var_dump($data);
      $this->view('pages/admins', $data);
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