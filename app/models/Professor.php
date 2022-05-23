<?php 
    class Professor{
        
        private $db;
        public function __construct( )    {
        $this->db = new Database();
    }
    
    public function getUser(){
        
        $this->db->query("SELECT * FROM tests");

        return $this->db->single();
    }
    
        public function addProfessor($nom , $genre , $matricule ,$class ,$matiere ,$phone){
            $this->db->query('INSERT INTO `professors`( `nom_complet`, `genre`, `matricule`,`class`,`matiere`,`phone`) VALUES (? ,? ,? ,? ,? ,?)');//:name,:email,:phone,:address
            
            $this->db->bind(1 ,$nom);
            $this->db->bind(2 ,$genre);
            $this->db->bind(3 ,$matricule);
            $this->db->bind(4 ,$class);
            $this->db->bind(5 ,$matiere);
            $this->db->bind(6 ,$phone);
            $this->db->execute();
            
        }
        public function getAllProfessors(){//SELECT * FROM `professors` WHERE 1
            $this->db->query('SELECT * FROM `professors`');
            try{
                return $this->db->resultSet();
                
            }catch(EXCEPTION $e){
                return 'ERROR '. $e->getMessage();
            }
            
        }
        public function delete($id){
            $this->db->query('DELETE FROM `professors` WHERE `id_pro` = ?');
            $this->db->bind(1,$id);
            $this->db->execute();
            $this->getAllProfessors();

        }
        public function getProfessor($id){//for update
            $this->db->query('SELECT * FROM `professors` WHERE `id_pro` = ?');
            $this->db->bind(1 ,$id );
            return $this->db->single();
        }
        public function updateprofessor($id ,$nom , $genre , $matricule ,$class ,$matiere ,$phone){
            $this->db->query('UPDATE `professors` SET `nom_complet`= ?,`genre`= ?,`matricule`= ?,`class`= ?,`matiere`= ?,`phone`= ? WHERE `id_pro`=  ?');
            $this->db->bind(1 ,$nom);
            $this->db->bind(2 ,$genre);
            $this->db->bind(3 ,$matricule);
            $this->db->bind(4 ,$class);
            $this->db->bind(5 ,$matiere);
            $this->db->bind(6 ,$phone);
            $this->db->bind(7 ,$id);

            $this->db->execute();
        }
    }