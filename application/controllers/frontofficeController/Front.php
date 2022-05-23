<?php
defined('BASEPATH') or exit('no direct script allowed');


class Front extends CI_Controller{
 

    public function __construct() {        
    parent::__construct();
}

 function index(){
 	$this->load->model('Backoffice_model');
  $data=array('voiture'=>$this->Backoffice_model-> allVoiture()
    ,'voiture_type'=>$this->Backoffice_model->voiture_category()
    ,'utilisateur'=>$this->session->userdata('login'));
  $this->load->view('frontoffice/Front',$data);
 }
function voiture(){
  $this->load->model('Backoffice_model');
  $data['voiture']=$this->Backoffice_model-> allVoiture();
  $this->load->view('frontoffice/All_voiture',$data);
 }

 function trajet_view(){
 	$this->load->model('Backoffice_model');
   $data=array('voiture'=>$this->Backoffice_model->allVoiture(),
    'utilisateur'=>$this->Backoffice_model->chauffeur()); 
 	$this->load->view('frontoffice/Trajet',$data);
 }




function heureParcourue($heure1,$heure2){
$diff=date_default_timezone_set('Africa/Lagos');
  $lera1 = strtotime( $heure1 ); 
  $lera2 = strtotime( $heure2 ); 
  $diff = $lera2 - $lera1;
  $hours = $diff / ( 60 * 60 );

return $hours;

}


function distanceParcourue($depart,$arriver){
$distance=$depart+$arriver;
return $distance;
}

function vitesseMoyenne($DistanceParcourue,$HeureTotal){
$vm=$DistanceParcourue/$HeureTotal*3.6;
return $vm;
}
function KilometreEnMetre($km){
 $metre=$km*1000;
 return $metre;
}
function HeureEnSeconde($Heure){
 $seconde=$Heure*3600;
 return $seconde;
}


function ajouter_trajet()
{
  if($_SERVER['REQUEST_METHOD']=='POST')
 	    {
          $data['voiture']=$this->input->post('voiture');
      

          $data['lieu_depart']=$this->input->post('lieu_depart');
          $data['date_depart_heure']=$this->input->post('date_depart_heure');
         
          $data['kilometrage_depart']=$this->input->post('kilometrage_depart');
        
          
          
          $data['lieu_arriver']=$this->input->post('lieu_arriver');
          $data['date_arriver_heure']=$this->input->post('date_arriver_heure');
         
          $data['kilometrage_arriver']=$this->input->post('kilometrage_arriver');
         
          $distance['distance_km']=$this->distanceParcourue($data['kilometrage_depart'],$data['kilometrage_arriver']);
          
         $heure['heure_parcourue']=$this->heureParcourue($data['date_depart_heure'],$data['date_arriver_heure']);
          
          
          $data['heure_parcourue']=$this->HeureEnSeconde($heure['heure_parcourue']);
          
         
          $data['distance_parcourue_km']=$distance['distance_km'];
          $data['distance_parcourue']=$this->KilometreEnMetre( $distance['distance_km']);
           
         
        
          $data['vitesse_moyenne']=$this->vitesseMoyenne($data['distance_parcourue'],$data['heure_parcourue']);



          $data['montant']=$this->input->post('montant');
          $data['quantiter']=$this->input->post('quantiter');  
        
          
         $data['motif']=$this->input->post('motif');  
         $message=" non disponible";
         $this->load->model('Frontoffice_model');
         $this->load->model('Backoffice_model');
         $this->Backoffice_model-> disponibiliter($this->input->post('voiture'),$message);
         $trajet=$this->Frontoffice_model->inserer_trajet($data);
         $this->session->set_flashdata('trajet','trajet ajouter');
         $this->trajet_view();
              
        }

        }





function voirlesdetails(){
      $this->load->model('Frontoffice_model');
     $id=$this->input->get('id');
     $voiture=$this->input->get('voiture');
     $details=array('id'=>$this->Frontoffice_model->details_produit($id),
      'voiture'=>$this->Frontoffice_model->echeance($voiture),
      'trajet'=>$this->Frontoffice_model->trajet_voiture($voiture));
     $this->load->view('frontoffice/Details_view',$details);
}




function recherche(){
  $recherche=$this->input->post('recherche');
  $this->load->model('Backoffice_model');
  $data=array('search'=>$this->Backoffice_model->voiture_recherche($recherche),
              'type'=>$this->Backoffice_model->voiture_category(),
                'utilisateur'=>$this->session->userdata('login')); 
  $this->load->view('frontoffice/Recherche_view',$data);
}


function recherche_avancer(){
   $query1=$this->input->post('recherche');
}






function alltrajet(){
  $this->load->model('Frontoffice_model');
  $data=array( 'trajet'=>$this->Frontoffice_model->AllTrajet());
   $this->load->view('frontoffice/All_trajet_view',$data);
}





}









?>