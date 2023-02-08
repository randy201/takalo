<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Categorie_model extends CI_Model{
        public function getAllCategorie($categorie=''){
            $this->load->database();
            $query = $this->db->query(sprintf("select OB.idObjet,u.nom,c.nomCategorie,OB.nomObjet,DO.sary,DO.description from objet OB,detailObjet DO,categorie c,user u where c.idCategorie=OB.idCategorie and OB.idobjet=DO.idobjet and u.idUser=OB.idUser and c.nomCategorie= '%s' ",$categorie));
            $result = $query->result_array();
            // echo $query;
            return $result;
        }

        public function getAllUser(){
            $this->load->database();
            $query = $this->db->query(sprintf("select * from user where isAdmin=0"));
            $result = $query->result_array();
            return $result;
        }

        public function getAllEchangeEffectuer(){
            $this->load->database();
            $query = $this->db->query(sprintf(" select * from echange where dateAccepte is not null "));
            $result = $query->result_array();
            return $result;
        }

        public function getTypeCategorie(){
            $this->load->database();
            $query = $this->db->get('categorie');
            $result = $query->result_array();
            // echo $result[0]['nomCategorie'];
            return $result;
        }

        public function getAllObjet($categorie,$idUser){
            $this->load->database();
            $query = $this->db->query(sprintf("select OB.idObjet,u.nom,c.nomCategorie,OB.nomObjet,DO.sary,DO.description from objet OB,detailObjet DO,categorie c,user u where c.idCategorie=OB.idCategorie and OB.idobjet=DO.idobjet and u.idUser=OB.idUser and u.idUser!=%s and c.nomCategorie= '%s' ",$idUser,$categorie));
            $result = $query->result_array();
            return $result;
        }

        public function supprimer($idCategorie){
            $this->load->database();
            $this->db->delete('categorie', array('idCategorie'=>$idCategorie));  
            $this->db->delete('objet', array('idCategorie'=>$idCategorie));
        }

        public function ajouter($objet){
            $this->load->database();
            $data = array('nomCategorie' => $objet);
            $this->db->insert('categorie',$data);    
        }

    }

?>
