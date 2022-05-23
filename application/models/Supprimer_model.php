<?php
defined('BASEPATH') or exit('no direct script allowed'); 

class Supprimer_model extends CI_Model {

	 public function __construct() {        
    parent::__construct();
}
function del($id){
	$this->db->where("id",$id);
   $this->db->delete("voiture");
}

}


