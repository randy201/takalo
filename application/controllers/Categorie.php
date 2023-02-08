<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categorie extends CI_Controller {
    public function getAllCategorie($categorie=''){
        $this->load->model('categorie_model');
        $data=array();
        $data['allObjet']=$this->categorie_model->getAllCategorie($categorie);
        $data['allType']=$this->categorie_model->getTypeCategorie();
        $data['allUser']=$this->categorie_model->getAllUser();
        $data['echangeEffectuer']=$this->categorie_model->getAllEchangeEffectuer();
        $this->load->view('allcategorie',$data);
    }

    public function getAllUser(){
        $this->load->model('categorie_model');
        $data=array();
        $data['allUser']=$this->categorie_model->getAllUser();
        $data['allObjet']=$this->categorie_model->getAllCategorie($categorie);
        $data['allType']=$this->categorie_model->getTypeCategorie();
        $data['echangeEffectuer']=$this->categorie_model->getAllEchangeEffectuer();

        $this->load->view('allcategorie',$data);
    }

    public function getAllObjet($categorie=''){
        $this->load->model('categorie_model');
        $this->load->model('objet_model');
        $idUser = $this->session->userdata('idUser');
        $data=array();
        $data['allObjet']=$this->categorie_model->getAllObjet($categorie,$idUser);
        $data['allType']=$this->categorie_model->getTypeCategorie();
        $data['objetUser'] = $this->objet_model->getUserObjet($idUser);
        $this->load->view('allObjet',$data);
    }

    public function supprimer($idCategorie){
        $this->load->model('categorie_model');
        $data=array();
        $this->categorie_model->supprimer($idCategorie);
        redirect(site_url('categorie/getAllCategorie'));
    }

    public function ajouter(){
        $this->load->model('categorie_model');
        $categorie=$this->input->get('newCategorie');
        $data=array();
        $this->categorie_model->ajouter($categorie);
        redirect(site_url('categorie/getAllCategorie'));
    }
}
