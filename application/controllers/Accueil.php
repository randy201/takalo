<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
	public function index() {
        $this->load->model('objet_model');
        $this->load->model('login_model');
        $idUser = $this->session->userdata('idUser');
        $data = array();
        $data['objets'] = $this->objet_model->getUserObjet($idUser);
        $data['user'] = $this->login_model->getUser($idUser);
        $data['categories'] = $this->objet_model->getAllCategory();
        $this->load->view('accueil',$data);
	}	

    public function supprimer(){
        $this->load->model('objet_model');
        $idObjet = $this->input->get('idObjet');
        $this->objet_model->deleteObjet($idObjet);
        redirect('accueil');
    }

    public function modifPage(){
        $this->load->model('objet_model');
        $idObjet = $this->input->get('idObjet');
        $data = array();
        $data['objets'] = $this->objet_model->findObjet($idObjet);
        $data['categories'] = $this->objet_model->getAllCategory();
        $data['error'] = $this->input->get('error');
        $this->load->view('modifierObjet',$data);
    }

    public function modifier(){
        $this->load->model('objet_model');
        $this->load->model('login_model');
        $idObjet = $this->input->post('idObjet');
        $nomObjet = $this->input->post('nomObjet');
        $idCategorie = $this->input->post('idCategorie');
        $valeur = $this->input->post('valeur');
        $sary = $this->input->post('sary');
        $descri = $this->input->post('descri');
        if($this->login_model->isNull($idObjet) || $this->login_model->isNull($nomObjet) || $this->login_model->isNull($idCategorie) || $this->login_model->isNull($sary) || $this->login_model->isNull($descri) || $this->login_model->isNull($valeur))redirect(site_url('accueil/modifPage?error=Completez les champs&&idObjet='.$idObjet));
        else {
            $this->objet_model->modifierObjet($idObjet,$nomObjet,$idCategorie,$sary,$descri,$valeur);
        }
        redirect('accueil');
    }

    public function ajoutPage(){
        $this->load->model('objet_model');
        $idObjet = $this->input->get('idObjet');
        $data = array();
        $data['categories'] = $this->objet_model->getAllCategory();
        $data['error'] = $this->input->get('error');
        $this->load->view('ajoutObjet',$data);
    }

    public function ajouterObjet(){
        $this->load->model('login_model');
        $this->load->model('objet_model');
        $nomObjet = $this->input->post('nomObjet');
        $idCategorie = $this->input->post('idCategorie');
        $sary = $this->input->post('sary');
        $descri = $this->input->post('descri');
        $idUser = $this->session->userdata('idUser');
        $valeur = $this->input->post('valeur');
        if($this->login_model->isNull($nomObjet) || $this->login_model->isNull($idCategorie) || $this->login_model->isNull($sary) || $this->login_model->isNull($descri) || $this->login_model->isNull($idUser) || $this->login_model->isNull($valeur))redirect(site_url('accueil/ajoutPage?error=Completez les champs'));
        else {
            $this->objet_model->addObjet($nomObjet,$idUser,$idCategorie,$sary,$descri,$valeur);
        }
        redirect(site_url('accueil'));
    }

    public function recherche(){
        $this->load->model('objet_model');
        $mot = $this->input->post('mot');
        $idUser = $this->session->userdata('idUser');
        $idCategorie = $this->input->post('idCategorie');
        $data = array();
        $data['objetsUser'] = $this->objet_model->getUserObjet($idUser);
        $data['objets'] = $this->objet_model->search($mot,$idCategorie);
        $data['categories'] = $this->objet_model->getAllCategory();
        $this->load->view('resultat',$data);
    }
}
?>
