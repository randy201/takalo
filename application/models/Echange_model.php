<?php
    date_default_timezone_set("Europe/Moscow");
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Echange_model extends CI_Model{
        public function insertEchange($idU1,$idU2,$ido1,$ido2){
            $req = "insert into echange(iduser1,iduser2,ido1,ido2,datedemande) values(%s,%s,%s,%s,%s)";
            $req = sprintf($req,$this->db->escape($idU1),$this->db->escape($idU2),$this->db->escape($ido1),$this->db->escape($ido2),$this->db->escape(date('Y-m-d H:i:s')));
            $this->db->query($req);
        }

        public function getDemande($idUser){
            $req = "select ie.idEchange,nom,nomObjet,nomObjet2,ie.dateDemande,ie.dateAccepte,idUser1,ie.idUser2,idO1,idO2 from (select idEchange,nom,idUser2,ie1.nomObjet,o.nomObjet as nomObjet2,dateDemande,dateAccepte
            from (select idEchange,nom,idUser2,nomObjet,idO2,dateDemande,dateAccepte 
            from echange e 
            join user u on u.idUser = e.idUser1 
            join objet o on e.idO1 = o.idObjet) as ie1
            join objet o on o.idObjet=ie1.idO2) as ie,echange e where ie.idechange=e.idechange and ie.dateAccepte is null and ie.idUser2 = %s";
            $req = sprintf($req,$this->db->escape($idUser));
            $query = $this->db->query($req);
            $admin = $query->result_array();
            return $admin;
        }


        public function accepterDemande($idEchange,$maka,$nomena,$ido1,$ido2){
            $req = "update echange set dateAccepte = %s where idEchange = %s";
            $req = sprintf($req,$this->db->escape(date('Y-m-d H:i:s')),$this->db->escape($idEchange));
            $this->db->query($req);
            $req = "update objet set idUser = %s where idObjet = %s";
            $req = sprintf($req,$this->db->escape($maka),$this->db->escape($ido1));
            $this->db->query($req);
            $req = "update objet set idUser = %s where idObjet = %s";
            $req = sprintf($req,$this->db->escape($nomena),$this->db->escape($ido2));
            $this->db->query($req);
        }

        public function deleteDemande($idEchange){
            $req = "delete from echange where idechange=%s";
            $req = sprintf($req,$this->db->escape($idEchange));
            $this->db->query($req);
        }
    }
?>