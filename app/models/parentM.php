<?php

class ParentM
{

    private $db;
    public function __construct( )    {

    $this->db = new Database;
}

public function addParent($data){

    $this->db->query('INSERT INTO `parents`(`nom_complet`, `genre`, `matricule`, `job`, `adresse`,`phone`) VALUES (:nom_complet,:genre,:matricule,:job,:adresse,:phone)');
    $this->db->bind(':nom_complet' ,$data['nom_complet']);
    $this->db->bind(':genre' ,$data['genre']);
    $this->db->bind(':matricule' ,$data['matricule']);
    $this->db->bind(':job' ,$data['job']);
    $this->db->bind(':adresse' ,$data['adresse']);
    $this->db->bind(':phone' ,$data['phone']);
    $this->db->execute();
}

public function getParents(){
    $this->db->query('SELECT * FROM parents');  
    return $this->db->resultSet();
}
public function delete($id_parent){
    $this->db->query('DELETE FROM `parents` WHERE id_parent = '.$id_parent);
    $this->db->execute();
}

public function getParent($idParent){
    $this->db->query('SELECT * FROM parents WHERE id_parent = '.$idParent);
    return $this->db->single();
}

//UPDATE `parents`
public function updateParent($idParent , $dataParent){
    // var_dump($dataParent);
    $this->db->query("UPDATE `parents` SET `nom_complet`=?,`genre`=?,`matricule`=?,`job`=?,`adresse`=?,`phone`= ? WHERE `id_parent` = ?");
    $this->db->bind(1 ,$dataParent['nom_complet']);
    $this->db->bind(2 ,$dataParent['genre']);
    $this->db->bind(3 ,$dataParent['matricule']);
    $this->db->bind(4 ,$dataParent['job']);
    $this->db->bind(5 ,$dataParent['adresse']);
    $this->db->bind(6 ,$dataParent['phone']);
    $this->db->bind(7 ,$idParent);
    $this->db->execute();
    
}
}