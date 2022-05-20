<?php


class AdminController extends Controller{

    public function __construct()
    {
        $this->adminModel = $this->model('admin');
    }

public function add(){
 if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $this->view('pages/admins');
 }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data =  $_POST;
    $this->adminModel->addAdmin($data);
    self::tableAdmins();
 }
}

public function tableAdmins(){
    $this->adminModel->getAdmins();
    $data = $this->adminModel->getAdmins();
    $this->view('pages/admins',$data);
}


public function delete(){
    $idAdmin = $_GET['id'];
    $this->adminModel->delete($idAdmin);
    self::tableAdmins();
}


public function update(){
    $dataAdmin = $_POST;
    $idAdmin = (int)$dataAdmin['idAdmin'];
    $this-> adminModel->update($dataAdmin,$idAdmin);
    self::tableAdmins(); 
}

public function search(){
    if(isset($_GET['search'])){
        $search_name = $_GET['searchName'];
        $dataSearch = $this->adminModel->search($search_name);
        $this->view('pages/admins',$dataSearch);
    }  
}


public function Login(){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $this->view('');
     }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $dataAdmin = $this->adminModel->Login($username,$password);
        if($dataAdmin == false){
            $this->view('pages/index',false);
        }

        else{
            $_SESSION['username'] = $username;
            $this->view('pages/dashborad');
        }

        

        // self::tableAdmins();
     } 
}

}