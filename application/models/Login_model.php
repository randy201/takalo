<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {		
    public function getAdmin(){
        $query = $this->db->query('select * from user where isAdmin = true');
        $admin = $query->result_array();
        return $admin;
    }

    public function testLogin($nom,$mdp){
        $query = $this->db->query('select * from user');
        foreach($query->result_array() as $user){
            if($user['nom'] == $nom && $user['mdp'] == $mdp) return $user['idUser'];
        }
        return 0;
    }

    public function isNull($val){
        if($val == '')return true;
        else return false;
    }

    public function addUser($nom,$mail,$mdp){
        $req = "insert into user(nom,mail,mdp) value(%s,%s,%s)";
        $req = sprintf($req,$this->db->escape($nom),$this->db->escape($mail),$this->db->escape($mdp));
        $this->db->query($req);
    }

    public function 

}
?>
