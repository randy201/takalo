<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Prix_model extends CI_Model{
        public function Approximatif20($idUser,$idObjet){
            $this->load->database();
            $query = $this->db->query(sprintf("select * from (select o.idUser,o.idObjet,u.nom,o.nomCategorie,o.nomObjet,o.sary,o.description,o.valeur
            from ((select o.idObjet,nomObjet,idUser,o.idCategorie,valeur,sary,description,nomCategorie
            from objet o
            join DetailObjet do on o.idObjet = do.idObjet
            join categorie c on o.idCategorie = c.idCategorie)) o
            join user u on u.idUser = o.idUser
            where (o.idObjet not in (select idO1 from echange)) and (o.idObjet not in (select idO2 from echange))) where idUser!=%s and valeur between (select (valeur-(valeur*20)/100) from (select o.idUser,o.idObjet,u.nom,o.nomCategorie,o.nomObjet,o.sary,o.description,o.valeur
            from ((select o.idObjet,nomObjet,idUser,o.idCategorie,valeur,sary,description,nomCategorie
            from objet o
            join DetailObjet do on o.idObjet = do.idObjet
            join categorie c on o.idCategorie = c.idCategorie)) o
            join user u on u.idUser = o.idUser
            where (o.idObjet not in (select idO1 from echange)) and (o.idObjet not in (select idO2 from echange))) where idObjet=%s and idUser=%s) AND (select (valeur+(valeur*20)/100) from (select o.idUser,o.idObjet,u.nom,o.nomCategorie,o.nomObjet,o.sary,o.description,o.valeur
            from ((select o.idObjet,nomObjet,idUser,o.idCategorie,valeur,sary,description,nomCategorie
            from objet o
            join DetailObjet do on o.idObjet = do.idObjet
            join categorie c on o.idCategorie = c.idCategorie)) o
            join user u on u.idUser = o.idUser
            where (o.idObjet not in (select idO1 from echange)) and (o.idObjet not in (select idO2 from echange))) where idObjet=%s and idUser=%s)",$idUser,$idObjet,$idUser,$idObjet,$idUser));
            $result = $query->result_array();
            $prix=array();
            return $result;
        }
        public function Approximatif10($idUser,$idObjet){
            $this->load->database();
            $query = $this->db->query(sprintf("select * from (select o.idUser,o.idObjet,u.nom,o.nomCategorie,o.nomObjet,o.sary,o.description,o.valeur
            from ((select o.idObjet,nomObjet,idUser,o.idCategorie,valeur,sary,description,nomCategorie
            from objet o
            join DetailObjet do on o.idObjet = do.idObjet
            join categorie c on o.idCategorie = c.idCategorie)) o
            join user u on u.idUser = o.idUser
            where (o.idObjet not in (select idO1 from echange)) and (o.idObjet not in (select idO2 from echange))) where idUser!=%s and valeur between (select (valeur-(valeur*10)/100) from (select o.idUser,o.idObjet,u.nom,o.nomCategorie,o.nomObjet,o.sary,o.description,o.valeur
            from ((select o.idObjet,nomObjet,idUser,o.idCategorie,valeur,sary,description,nomCategorie
            from objet o
            join DetailObjet do on o.idObjet = do.idObjet
            join categorie c on o.idCategorie = c.idCategorie)) o
            join user u on u.idUser = o.idUser
            where (o.idObjet not in (select idO1 from echange)) and (o.idObjet not in (select idO2 from echange))) where idObjet=%s and idUser=%s) AND (select (valeur+(valeur*10)/100) from (select o.idUser,o.idObjet,u.nom,o.nomCategorie,o.nomObjet,o.sary,o.description,o.valeur
            from ((select o.idObjet,nomObjet,idUser,o.idCategorie,valeur,sary,description,nomCategorie
            from objet o
            join DetailObjet do on o.idObjet = do.idObjet
            join categorie c on o.idCategorie = c.idCategorie)) o
            join user u on u.idUser = o.idUser
            where (o.idObjet not in (select idO1 from echange)) and (o.idObjet not in (select idO2 from echange))) where idObjet=%s and idUser=%s)",$idUser,$idObjet,$idUser,$idObjet,$idUser));
            $result = $query->result_array();
            $prix=array();
            return $result;
        }

    }