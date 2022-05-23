<?php
defined('BASEPATH') or exit('no direct script allowed');


class Maitenance extends CI_Controller{
 

    public function __construct() {        
    parent::__construct();
}

function maitenance(){
	$voiture=$this->input->get('voiture');
    $this->load->model('Frontoffice_model');    
    $data=array('voiture'=>$this->Frontoffice_model->maitenance_voiture($voiture));
    $this->load->view('frontoffice/Maintenance_view',$data);
}


function dateDiffInDays($date1, $date2) {
 $date=date_default_timezone_set('Africa/Lagos');
       

        $dateDifference = abs(strtotime($date1) - strtotime($date2));

        $years  = floor($dateDifference / (365 * 60 * 60 * 24));
        $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));

        $jrestant =  $years." anne,  ".$months." mois et ".$days." jours";
        $jrestant2=($years*365)+($months*24)+$days;
  
   return $jrestant2;
}



function maitenance_ajout(){
 if($_SERVER['REQUEST_METHOD']=='POST')
 	    {
       
       $this->load->model('Frontoffice_model');
       $voiture=$this->input->post('voiture');
 
       $type_maitenance=$this->input->post('type_maitenance');
 
 
       $date_ajout=$this->input->post('date_ajout');
       $date_expiration=$this->input->post('date_expiration');
 
       $nbjours=$this->dateDiffInDays($date_ajout, $date_expiration);
 
       if($type_maitenance=='remplacement pneu'){
        $km_restant_valable=2000;

    } else if($type_maitenance=='Vidange'){
        $km_restant_valable=5000;
       }

             $data=array('voiture'=>$voiture,
             'type_maitenance'=>$type_maitenance,
             'date_ajout'=>$date_ajout,
             'date_expiration'=>$date_expiration,   
             'valabiliter'=> $nbjours,   
             'km_restant_valable'=> $km_restant_valable 
                 );

   $maitenance=$this->Frontoffice_model->inserer_maintenance($data);
   $this->session->set_flashdata('maitenance','maintenance terminer !');
  $query=array('voiture'=>$this->Frontoffice_model->maitenance_voiture($data['voiture']));
    $this->load->view('frontoffice/Maintenance_view',$query);

  
 

}


}
}