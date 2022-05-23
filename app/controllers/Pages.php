<?php
  class Pages extends Controller {
    public function __construct(){
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
    
    
   
  }