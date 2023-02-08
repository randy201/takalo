<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Categorie_model extends CI_Model{
        public function getAllCategorie($categorie=''){
            $query = $this->db->query(sprintf("select OB.idObjet,u.nom,c.nomCategorie,OB.nomObjet,DO.sary,DO.description from objet OB,detailObjet DO,categorie c,user u where c.idCategorie=OB.idCategorie and OB.idobjet=DO.idobjet and u.idUser=OB.idUser and c.nomCategorie= '%s' ",$categorie));
            $result = $query->result_array();
            // echo $query;
            return $result;
        }

        public function getAllUser(){
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
            $query = $this->db->get('categorie');
            $result = $query->result_array();
            // echo $result[0]['nomCategorie'];
            return $result;
        }

        public function getAllObjet($categorie,$idUser){
            $query = $this->db->query(sprintf("select idUser,idObjet,nom,nomCategorie,nomObjet,sary,description from (select o.idUser,o.idObjet,u.nom,o.nomCategorie,o.nomObjet,o.sary,o.description,o.valeur
            from ((select o.idObjet,nomObjet,idUser,o.idCategorie,valeur,sary,description,nomCategorie
            from objet o
            join DetailObjet do on o.idObjet = do.idObjet
            join categorie c on o.idCategorie = c.idCategorie)) as o
            join user u on u.idUser = o.idUser
            where (o.idObjet not in (select idO1 from echange)) and (o.idObjet not in (select idO2 from echange))) as uu where idUser!=%s and nomCategorie= '%s'",$idUser,$categorie));
            $result = $query->result_array();
            return $result;
        }

        public function supprimer($idCategorie){
            $this->db->delete('categorie', array('idCategorie'=>$idCategorie));  
            $this->db->delete('objet', array('idCategorie'=>$idCategorie));
        }

        public function ajouter($objet){
            $data = array('nomCategorie' => $objet);
            $this->db->insert('categorie',$data);    
        }

    }

?>