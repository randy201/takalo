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

    public function accepter(){
        $this->load->model('echange_model');
        $idUser = $this->session->userdata('idUser');
        $idEchange = $this->input->get('idEchange');
        $idObjet = $this->input->get('idObjet');
        $nekena = $this->input->get('nekena');
        $idObjet2 = $this->input->get('idObjet2');
        $this->echange_model->accepterDemande($idEchange,$idUser,$nekena,$idObjet,$idObjet2);
        redirect(site_url('accueil'));
    }

    public function annuler(){
        $this->load->model('echange_model');
        $idUser = $this->session->userdata('idUser');
        $idEchange = $this->input->get('idEchange');
        $this->echange_model->deleteDemande($idEchange);
        $data = array();
        $data['demandes'] = $this->echange_model->getDemande($idUser);
        $this->load->view('acceptation',$data);
    }
}