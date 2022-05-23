<?php
defined('BASEPATH') or exit('no direct script allowed'); 

class Backoffice_model extends CI_Model {

	 public function __construct() {        
    parent::__construct();
}
 function ajouter($data){
 	 return $this->db->insert('voiture',$data);
 }

function allVoiture(){
	return $this->db->get('voiture');
}


function chauffeur(){
	 return $this->db->get('utilisateur');
      
}
function disponibiliter($voiture,$status){
	 $query=$this->db->query("UPDATE voiture SET disponibiliter='$status' where modele='".$voiture."'");
         return $query;
}

function allVoitureDisponible($disponibiliter){
	$this->db->select('*');
    $this->db->from('voiture');
    $this->db->where('disponibiliter',$disponibiliter);
    $query=$this->db->get();
    return $query;
}

function voiture_category(){
$query=$this->db->query("SELECT Min(id) As id,type from voiture GROUP BY type");
return $query;
}
function voiture_recherche($recherche)
{
 $this->db->select('*');
    $this->db->from('voiture');
    $this->db->like('modele', $recherche);
    $this->db->Order_by('modele DESC');
    $query = $this->db->get();

    if($query->num_rows() > 0) {
        return $query;
    }
    }
}




?>