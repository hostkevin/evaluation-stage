<?php
defined('BASEPATH') or exit('no direct script allowed'); 

class Login_model extends CI_Model {

	 public function __construct() {        
    parent::__construct();
}
 function check_login($data){
 	 return $this->db->get_where('utilisateur',$data)->row();
 }

}
?>