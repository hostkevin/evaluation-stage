<?php
defined('BASEPATH') or exit('no direct script allowed'); 

class Register_model extends CI_Model {

	 public function __construct() {        
    parent::__construct();
}
 function insert_user($data){
 	$this->db->insert('utilisateur',$data);
 }

}
?>