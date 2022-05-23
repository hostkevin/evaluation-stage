
<?php
defined('BASEPATH') or exit('no direct script allowed');
class Echeance extends CI_controller{

 public function __construct() {        
    parent::__construct();

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


function index(){
     $this->load->model('Backoffice_model');
  $data=array('voiture'=>$this->Backoffice_model->allVoiture(),'utilisateur'=>$this->Backoffice_model->chauffeur());
	$this->load->view('Echeance_view',$data);
}

function ajouter_echeance()
{
  if($_SERVER['REQUEST_METHOD']=='POST')
 	    {
         
           $voiture=$this->input->post('voiture');
           $type=$this->input->post('type');
           $date_debut=$this->input->post('date_debut');  
           $date_expirer=$this->input->post('date_expirer');  
           

$nbjours = $this->dateDiffInDays($date_debut, $date_expirer);

          
         $data=array(
                     'voiture'=>$voiture,
                      'type'=>$type,
                      'date_debut'=>$date_debut,
                      'date_expirer'=>$date_expirer,
                       'nbjours'=>$nbjours,
                       
          );


         $this->load->model('Frontoffice_model');
         $trajet=$this->Frontoffice_model->inserer_echeance($data);
         $this->session->set_flashdata('echeance','echeance ajouter');
         $this->index();
              
        }

        }

}
?>