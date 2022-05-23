<?php
defined('BASEPATH') or exit('no direct script allowed');


class Admin extends CI_Controller{
 

    public function __construct() {        
    parent::__construct();
}
 
 function index()
 {
   $this->load->view('AdminView/Admin_view');
 }



 function back($produit,$session){
  $this->load->view('backoffice/Back_view',$produit,$session);
 }




 function checkadmin(){

  if($_SERVER['REQUEST_METHOD']=='POST'){
        $this->form_validation->set_rules('login','Email','required');
 	    $this->form_validation->set_rules('mdp','Password','required');
      if($this->form_validation->run()==TRUE){
       	$data['login']=$this->input->post('login');
        $data['mdp']=$this->input->post('mdp');
      
        $this->load->model('Admin_model'); 
        $check=$this->Admin_model->check_admin($data);
          
          if($check!=FALSE)
      {
  
         
         $this->load->model('Backoffice_model');
         $produit['voiture']=$this->Backoffice_model->allVoiture();
         $this->session->set_userdata('login',$data['login']);  
         $admin=$this->session->userdata('login');
         $this->back($produit,$admin);
        
       }

        else
      {
          $this->session->set_flashdata('errorAdmin','mot de passe ou login incorecte');
          $this->load->view('AdminView/Admin_view');
          
      }
}
}
}



 }


?>