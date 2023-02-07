<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Echange extends CI_Controller {
    public function demande($idO1){
        $this->load->model('Echange_model');
        $idUser=2;
        $this->Echange_model->insertDemande($idO1,$idUser);
        redirect(site_url('categorie/getAllObjet'));

    }
}