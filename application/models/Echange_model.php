<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Echange_model extends CI_Model{
        public function insertDemande($idO1='',$idUser1){
            $this->load->database();
            $data = array('idUser1' => $idUser ,'idO1' => $idO1, 'dateDemande' =>$currentDateTime = date('Y-m-d H:i:s') );
            $this->db->insert('echange',$data); 
        }
    }