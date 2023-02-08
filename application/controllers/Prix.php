<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Prix extends CI_Controller {
    public function getPrix_20($idObjet){
        $idUser = $this->session->userdata('idUser');
        $this->load->model('prix_model');
        $data['AllPrix_20'] = $this->prix_model->Approximatif20($idUser,$idObjet);
        $this->load->view('approximation',$data);

    }
    public function getPrix_10($idObjet){
        $idUser = $this->session->userdata('idUser');
        $this->load->model('prix_model');
        $data['AllPrix_10'] = $this->prix_model->Approximatif10($idUser,$idObjet);
        $this->load->view('approximation',$data);
    }
}