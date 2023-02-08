<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index() {
        $this->load->model('login_model');
        $data = array();
        $admin = $this->login_model->getAdmin();
        $data['default'] = (isset($_GET['admin']))?$admin[0]['nom']:'';
        $data['error'] = $this->input->get('error');
		$this->load->view('login',$data);
	}	
    
    public function testLogin(){
        $this->load->model('login_model');
        $nom = $this->input->post('name');
        $mdp = $this->input->post('mdp');
        $result = $this->login_model->testLogin($nom,$mdp);
        $admin = $this->login_model->getAdmin();
        if($result == 0) redirect(site_url('login?error=Login non valide'));
        else {
            $this->session->set_userdata('idUser',$result);
            $url = ($admin[0]['idUser'] == $result && isset($_POST['admin']))?'categorie/getAllCategorie':'accueil';
            redirect(site_url($url));
        }
    }

    public function inscription(){
        $data = array();
        $data['error'] = $this->input->get('error');
        $this->load->view('inscription',$data);
    }

    public function deconnexion(){
        session_destroy();
        redirect(site_url('login'));
    }

    public function creerUser(){
        $this->load->model('login_model');
        $nom = $this->input->post('nom');
        $mail = $this->input->post('mail');
        $mdp = $this->input->post('mdp');
        if($this->login_model->isNull($nom) || $this->login_model->isNull($mdp) || $this->login_model->isNull($mail)) redirect(site_url('login/inscription?error=Completez les champs'));
        else {
            $this->login_model->addUser($nom,$mail,$mdp);
        }
    }
}
?>
