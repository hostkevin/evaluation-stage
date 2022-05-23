<?php
defined('BASEPATH') or exit('no direct script allowed');


class Backoffice extends CI_Controller{
 

    public function __construct() {        
    parent::__construct();
}

  function index()
 {
   $this->load->model('Backoffice_model');
   $produit['voiture']=$this->Backoffice_model->allVoiture();
   $this->load->view('backoffice/Back_view',$produit);
   
 }
 



   function ajouter_view(){
  	
    $this->load->view('backoffice/Ajouter_view');
  }
 
 





  function supprimer_view(){
  $this->load->model('Backoffice_model');
  $produit['voiture']=$this->Backoffice_model->allVoiture();
 	$this->load->view('backoffice/Supprimer_view',$produit);
 }
 








 function ajouter_voiture(){
 	    if($_SERVER['REQUEST_METHOD']=='POST')
 	    {
          
       	$data['num']=$this->input->post('num');
        $data['modele']=$this->input->post('modele');
        $data['marque']=$this->input->post('marque'); 
        $data['type']=$this->input->post('type');
        
       
       $config['upload_path'] = 'upload/img/';
       $config['allowed_types'] = 'jpg|jpeg|png|gif';
       $config['file_name'] = $_FILES['image']['name'];
                
                //Load upload library and initialize here configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
             if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $data['image']= $uploadData['file_name'];
                   $data['disponibiliter']="disponible";
               

       $this->load->model('Backoffice_model');
       $voiture=$this->Backoffice_model->ajouter($data);
        
        if($voiture!=FALSE){
              $this->session->set_flashdata('ok','voiture ajouter');
              $this->ajouter_view(); 
              
        }
        
        }


}






function supprime(){
 $this->load->model('Backoffice_model');
 $modele=$this->input->get('id');
 $this->Backoffice_model->supprimer($modele);
 $this->supprimer_view();
}








}
}
?>
 