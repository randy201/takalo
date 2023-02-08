<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet_model extends CI_Model {		
    public function getUserObjet($idUser){
        $req = "select * from infoobjet where iduser = %s";
        $req = sprintf($req,$this->db->escape($idUser));
        $query = $this->db->query($req);
        $objet = $query->result_array();
        return $objet;
    }

    public function deleteObjet($idObjet){
        $req = "delete from detailobjet where idobjet=%s";
        $req = sprintf($req,$this->db->escape($idObjet));
        $this->db->query($req);
        $req = "delete from objet where idobjet=%s";
        $req = sprintf($req,$this->db->escape($idObjet));
        $this->db->query($req);
    }

    public function modifierObjet($idObjet,$nomObjet,$idCategorie,$sary,$descri){
        $req = "update objet set nomObjet=%s,idCategorie=%s where idObjet=%s";
        $req = sprintf($req,$this->db->escape($nomObjet),$this->db->escape($idCategorie),$this->db->escape($idObjet));
        $this->db->query($req);
        $req = "update detailobjet set sary=%s,description=%s where idObjet=%s";
        $req = sprintf($req,$this->db->escape($sary),$this->db->escape($descri),$this->db->escape($idObjet));
        $this->db->query($req);
    }

    public function findObjet($idObjet){
        $req = "select * from infoobjet where idObjet = %s";
        $req = sprintf($req,$this->db->escape($idObjet));
        $query = $this->db->query($req);
        $objet = $query->result_array();
        return $objet;
    }

    public function getAllCategory(){
        $req = "select * from categorie";
        $query = $this->db->query($req);
        $objet = $query->result_array();
        return $objet;
    }

    public function addObjet($nomObjet,$idUser,$idCategorie,$sary,$descri){
        $req = "insert into objet(nomObjet,idUser,idCategorie) values(%s,%s,%s)";
        $req = sprintf($req,$this->db->escape($nomObjet),$this->db->escape($idUser),$this->db->escape($idCategorie));
        $this->db->query($req);
        echo $req;
        $query = $this->db->query("select idObjet from objet order by idObjet desc limit 1");
        $objet = $query->row_array();
        $req = "insert into detailobjet(idObjet,sary,description) values(%s,%s,%s)";
        $req = sprintf($req,$this->db->escape($objet['idObjet']),$this->db->escape($sary),$this->db->escape($descri));
        echo $req;
        $this->db->query($req);
    }
}
?>
