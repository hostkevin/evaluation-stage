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
}
?>