<?php 



class StudentController extends InfoController{

    
    public function __construct()
    {
     $this->StudentModel = $this->model('Student');
    }
    public function add(){
        
        if(isset($_POST['submit'])) {
            $data = $_POST;
           $this->StudentModel->addStudent($data);
           self::getStudent();
        }
        else{
            $this->view('page/students');
        }
    }
    public function getStudent(){      
        $data = $this->StudentModel->getStudent();     
        $this->view('pages/Students',$data);
    }
    public function delete(){
        $id_stu = $_GET['id'];
        // echo $id_stu;
        $this->StudentModel->delete($id_stu);
        self::getStudent();
    }
   public function Update(){
       $id = $_GET['id'];
       $data = $_POST;
       $this->StudentModel->Update($id ,$data );
       header('location:'.URLROOT.'/pages/students');
   }

   public function getOneStudent(){
       $idStu = $_GET['id'];
    //    var_dump($idStu);
   
       $dataStd = $this->StudentModel->getOneStudent($idStu);    
        //   header('location:'.URLROOT.'/pages/modalUpdate');
       $this->view('pages/modalUpdate',(array) $dataStd);
    //    header('location:'.URLROOT.'/pages/modalUpdate');
   }

}