<?php

class Student{

    private $db ; 

    public function __construct(){
        $this->db = new Database;
    }
    public function getStudent()
    {
        $this->db->query("SELECT * FROM `students`");
       $data =  $this->db->resultSet();
        return $data ;
    }
    public function getOneStudent($id_stu){
        $this->db->query("SELECT * FROM `students` WHERE `id_stu`=?");
        $this->db->bind(1 , $id_stu);
        return $this->db->single();
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

    }//UPDATE `students` SET `id_stu`='[value-1]',`nom_complet`='[value-2]',`genre`='[value-3]',`matricule`='[value-4]',
    //`class`='[value-5]',`parents`='[value-6]',`adresse`='[value-7]',`date_naissance`='[value-8]',`email`='[value-9]',`nom_parents`='[value-10]' WHERE 1

    public function update($id_stu , $data){
        var_dump($data);
        $this->db->query("UPDATE  `students` SET `nom_complet` = ?, `genre` =?, `matricule`= ? , `class`=?, `parents`=?, `adresse`=?, `date_naissance`=?, `email`=?, `nom_parents`=? WHERE `id_stu` = ? ");
        $this->db->bind(1 ,$data['nom_complet']);
        $this->db->bind(2 ,$data['genre']);
        $this->db->bind(3 ,$data['matricule']);
        $this->db->bind(4 ,$data['class']);
        $this->db->bind(5  ,$data['parents']);
        $this->db->bind(6  ,$data['adresse']);
        $this->db->bind(7  ,$data['date_naissance']);
        $this->db->bind(8  ,$data['email']);
        $this->db->bind(9  ,$data['nom_parents']);
        $this->db->bind(10  ,$id_stu);
        $this->db->execute();   
    }
}