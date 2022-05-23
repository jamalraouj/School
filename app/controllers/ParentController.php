<?php


class ParentController extends Controller{

    public function __construct()
    {
        $this->parentModel = $this->model('parentM');
    }

    public function addParent(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->view('pages/parents');
         }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data =  $_POST;
            $this->parentModel->addParent($data);
            self::getParents();
            header('location:'.URLROOT.'/pages/parents');
         }  
         
    }

    public function getParents(){
        $dataParents = $this->parentModel->getParents();
        $this->view('pages/parents',$dataParents);
    }

    
public function delete(){
    $id_parent = $_GET['id'];
    $this->parentModel->delete($id_parent);
    self::getParents();
}

public function update(){
    $idParent = $_GET['id'];
    $data =  $_POST;
    // var_dump($data);
    // var_dump( $idParent);
    $this->parentModel->updateParent($idParent , $data);
    
            header('location:'.URLROOT.'/pages/parents');
         }


public function getParent(){
        $idParent = $_GET['id'];
        $dataParent = $this->parentModel->getParent($idParent);
        $this->view('pages/updatP',$dataParent);
}


}