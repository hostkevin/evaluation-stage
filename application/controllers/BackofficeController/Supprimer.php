<?php
defined('BASEPATH') or exit('no direct script allowed'); 

class Supprimer extends CI_Controller {

	 public function __construct() {        
    parent::__construct();
}




  function supprimer_view(){
  $this->load->model('Backoffice_model');
  $produit['voiture']=$this->Backoffice_model->allVoiture();
 	$this->load->view('backoffice/Supprimer_view',$produit);
 }



function delete(){
 
 $mdl=$this->input->get('id');
 $this->load->model('Supprimer_model');
 $this->Supprimer_model->del($mdl);
 $this->supprimer_view();
}
}