<?php

class Student{

    private $db ; 

    public function __construct(){
        $this->db = new Database;

    }

    public function getStudent()
    {
        $this->db->query("SELECT * FROM students");
       $data =  $this->db->resultSet();
        return $data ;
    }


    public function addStudent($datastudent){
        var_dump($datastudent);
        $this->db->query('INSERT INTO `students`(`nom_complet`,`genre`, `matricule`, `class`, `parents`, `adresse`, `date_naissance`, `email`, `nom_parents`) VALUES (:nom_complet,:genre,:matricule,:class, :parents , :adresse, :date_naissance,:email, :nom_parents)');
        $this->db->bind(':nom_complet' ,$datastudent['nom_complet']);
        $this->db->bind(':genre' ,$datastudent['genre']);
        $this->db->bind(':matricule' ,$datastudent['matricule']);
        $this->db->bind(':class' ,$datastudent['class']);
        $this->db->bind(':parents' ,$datastudent['parents']);
        $this->db->bind(':adresse' ,$datastudent['adresse']);
        $this->db->bind(':date_naissance' ,$datastudent['date_naissance']);
        $this->db->bind(':email' ,$datastudent['email']);
        $this->db->bind(':nom_parents' ,$datastudent['nom_parents']);
        $this->db->execute();
    }

    public function delete($id_stu){
        $this->db->query('DELETE FROM `students` WHERE `id_stu` = ?');
        $this->db->bind(1 , $id_stu);
        $this->db->execute();

    }

    public function update($id_stu){
        $this->db->query("UPDATE  `students` SET nom_complet =: nom_complet, genre =:genre, matricule=:matricule, class=:class, parents=:parents, adresse=:adresse, date_naissance=:date_naissance, email=:email, nom_parents=:nom_parents WHERE id_stu = $id_stu ");
        $this->db->bind(':nom_complet' ,$_POST['nom_complet']);
        $this->db->bind(':genre' ,$_POST['genre']);
        $this->db->bind(':matricule' ,$_POST['matricule']);
        $this->db->bind(':class' ,$_POST['class']);
        $this->db->bind(':parents' ,$_POST['parents']);
        $this->db->bind(':adresse' ,$_POST['adresse']);
        $this->db->bind(':date_naissance' ,$_POST['date_naissance']);
        $this->db->bind(':email' ,$_POST['email']);
        $this->db->bind(':nom_parents' ,$_POST['nom_parents']);
        $this->db->execute();   
    }
}