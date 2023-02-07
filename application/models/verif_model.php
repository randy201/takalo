<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Verif_model extends CI_Model{
        public function verif($name, $pass){
            if($name=="test" && $pass=="test"){
                return true;
            }
            return false;
        }
    }

?>