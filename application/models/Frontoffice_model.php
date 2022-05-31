<?php
defined('BASEPATH') or exit('no direct script allowed'); 

class Frontoffice_model extends CI_Model {

	 public function __construct() {        
    parent::__construct();
}
function inserer_trajet($data){
 $this->db->insert('trajet',$data);	
}
function inserer_echeance($data){
 $this->db->insert('echeance',$data);	
}
function details_produit($id){
	$this->db->select('*');
    $this->db->from('voiture');
    $this->db->where('id',$id);
    $query=$this->db->get();
    return $query;





}
function echeance($voiture){
	$this->db->select('*');
    $this->db->from('echeance');
    $this->db->where('voiture',$voiture);
    $query=$this->db->get();
    return $query;





}

function allVoiture(){
    return $this->db->get('voiture');
}

function trajet_voiture($voiture){
    $this->db->select('*');
    $this->db->from('trajet');
    $this->db->where('voiture',$voiture);
    $query=$this->db->get();
    return $query;
}

function AllTrajet(){
    return $this->db->get('trajet');
}

function maitenance_voiture($voiture){
    $this->db->select('*');
    $this->db->from('voiture');
    $this->db->where('modele',$voiture);
    $query=$this->db->get();
    return $query;
}

function getdistance_parcourue($voiture){
     $this->db->select('*');
    $this->db->from('trajet');
    $this->db->where('voiture',$voiture);
    $query=$this->db->get();
    return $query;
}

function inserer_maintenance($data){
     $this->db->insert('maitenance',$data); 

}
function all_maintenance(){
    return $this->db->get('maitenance');

}

function en_maintenance($voiture,$mess){
     $query=$this->db->query("UPDATE trajet SET maintenance='$mess' where voiture='".$voiture."'");
         return $query;
}

function maintenance_terminer($voiture,$mess){
     $query=$this->db->query("UPDATE trajet SET maintenance='$mess' where voiture='".$voiture."'");
         return $query;
}


}
?>