<?php
defined('BASEPATH') or exit('no direct script allowed'); 

class Admin_model extends CI_Model {

	 public function __construct() {        
    parent::__construct();
}
 function check_admin($data){
 	 return $this->db->get_where('admin',$data)->row();
 }

}
?>