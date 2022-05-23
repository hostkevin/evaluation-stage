<?php
defined('BASEPATH') or exit('no direct script allowed');


class Register extends CI_Controller{

  public function __construct() {        
    parent::__construct();
}
   
 public function index(){
   $this->load->view('layout/Register_views');
  }

 function register(){
 	if($_SERVER['REQUEST_METHOD']=='POST'){
 		
       	 $nom=$this->input->post('nom');
         $prenom=$this->input->post('prenom');
         $login=$this->input->post('login');
         $mdp=$this->input->post('mdp');
         $email=$this->input->post('email');
         $numero=$this->input->post('numero');
         
          $data=array(
              'nom'=>$nom,
              'prenom'=>$prenom,
              'login'=>$login,
              'mdp'=>$mdp,
              'email'=>$email,
               'numero'=>$numero

          );
      
        $this->load->model('Register_model');
        $this->Register_model->insert_user($data);
        $this->session->set_flashdata('succes','inscription terminer !');
        redirect(site_url('RegisterController/Register/index'));
        
       }

 	}
 }



?>