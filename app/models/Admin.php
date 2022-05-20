<?php

class Admin
{

    private $db;
    public function __construct( )    {

    $this->db = new Database;
}


public function Login($username,$password){
    $this->db->query("SELECT * FROM admins WHERE username = '$username' and password = '$password'");
    return $this->db->single();
}


public function getAdmins(){
$this->db->query("SELECT * FROM Admins");
   return $this->db->resultSet();
}


public function addAdmin($dataAdmin){
    $this->db->query('INSERT INTO `Admins`(`full_name`, `matricule`, `role`, `username`, `password`) VALUES (:full_name,:matricule,:role,:username,:password)');
    $this->db->bind(':full_name' ,$dataAdmin['full_name']);
    $this->db->bind(':matricule' ,$dataAdmin['matricule']);
    $this->db->bind(':role' ,$dataAdmin['role']);
    $this->db->bind(':username' ,$dataAdmin['username']);
    $this->db->bind(':password' ,$dataAdmin['password']);
    $this->db->execute();
    // try{
    //     $this->db->execute();
    //   } catch(PDOException $e){
    //     $this->error = $e->getMessage();
    //     echo $this->error;
    //   }
}


public function delete($idAdmin){
    $this->db->query('DELETE FROM `admins` WHERE idAdmin = '.$idAdmin);
    $this->db->execute();
}

public function update($dataAdmin,$idAdmin){
    $this->db->query("UPDATE `admins` SET full_name=:full_name, matricule = :matricule, role= :role, username = :username , password = :password WHERE idAdmin =$idAdmin");
    $this->db->bind(':full_name' ,$dataAdmin['full_name']);
    $this->db->bind(':matricule' ,$dataAdmin['matricule']);
    $this->db->bind(':role' ,$dataAdmin['role']);
    $this->db->bind(':username' ,$dataAdmin['username']);
    $this->db->bind(':password' ,$dataAdmin['password']);
    $this->db->execute();   
}

public function search($search_name){
    $search_name = "%".$search_name."%";
    $this->db->query("SELECT * FROM Admins WHERE username LIKE :name OR full_name LIKE :name");
    $this->db->bind(':name' ,$search_name);
    return $this->db->resultSet();
}

}