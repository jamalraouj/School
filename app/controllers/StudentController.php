<?php 



class StudentController extends Controller {
    public function __construct()
    {
     $this->StudentModel = $this->model('Student');
    }
    public function add(){
        
        if(isset($_POST['submit'])) {
            $data = $_POST;
           $this->StudentModel->addStudent($data);
           self::tableStudent();
        }
        else{
            $this->view('page/students');
        }
    }
    public function tableStudent(){      
        $data = $this->StudentModel->getStudent();     
        $this->view('pages/Students',$data);
    }
    public function delete(){
        $id_stu = $_GET['id'];
        // echo $id_stu;
        $this->StudentModel->delete($id_stu);
        self::tableStudent();
    }
   public function Update(){
       $id_stu = $_GET['id'];
       $this->StudentModel->Update( $_GET['id']);
   }
}