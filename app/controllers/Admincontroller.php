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
    // $this->adminModel->getAdmins();
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

}