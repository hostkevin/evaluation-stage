<?php
defined('BASEPATH') or exit('no direct script allowed');


class Garage extends CI_Controller{
 

    public function __construct() {        
    parent::__construct();
}

function index(){
	$this->load->model('Backoffice_model');
	$disponible='disponible';
	$data['voiture']=$this->Backoffice_model->allVoitureDisponible($disponible);
	$this->load->view('frontoffice/Garage_view',$data);
}

}