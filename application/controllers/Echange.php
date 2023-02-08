<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Echange extends CI_Controller {
    public function demande(){
        $this->load->model('echange_model');
        $idU1 = $this->session->userdata('idUser');
        $idU2 = $this->input->get('idU2');
        $ido1 = $this->input->get('ido1');
        $ido2 = $this->input->get('ido2');
        $this->echange_model->insertEchange($idU1,$idU2,$ido1,$ido2);
        redirect(site_url('accueil'));
    }

    public function acceptation(){
        $this->load->model('echange_model');
        $idUser = $this->session->userdata('idUser');
        $data = array();
        $data['demandes'] = $this->echange_model->getDemande($idUser);
        $this->load->view('acceptation',$data);
    }
}
