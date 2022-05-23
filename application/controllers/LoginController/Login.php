<?php
defined('BASEPATH') or exit('no direct script allowed');


class Login extends CI_Controller{
 

    public function __construct() {        
    parent::__construct();
}
 

   function index()
   {
     return $this->load->view('layout/Login');
   }
   function front($data,$session){
    $this->load->view('frontoffice/Front',$data,$session);
   }
 

  function login()
  {
    	if($_SERVER['REQUEST_METHOD']=='POST'){
        $this->form_validation->set_rules('login','Email','required');
 	    $this->form_validation->set_rules('mdp','Password','required');
      if($this->form_validation->run()==TRUE){
       	$data['login']=$this->input->post('login');
        $data['mdp']=$this->input->post('mdp');
        
        $this->load->model('Login_model'); 
        $check=$this->Login_model->check_login($data);
          
          if($check!=FALSE)
      {
  
         $this->load->model('Backoffice_model');
        $this->session->set_userdata('login',$data['login']);  
        $produit=array('voiture'=>$this->Backoffice_model->allVoiture(),'voiture_type'=>$this->Backoffice_model->voiture_category(),'utilisateur'=>$this->session->userdata('login'));
         
         $this->front($produit,$this->session->userdata('login'));
       }

        else
      {
          $this->session->set_flashdata('error','mot de passe ou login incorecte');
          $this->load->view('layout/Login');
          
      }
}
}
}

function deconnexion()
{
   session_destroy();
   $this->index();
}
function deconnexion_utilisateur(){

  session_destroy();
   $this->index();
}


}?>