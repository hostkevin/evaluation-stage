<?php
defined('BASEPATH') or exit('no direct script allowed');


class Home extends CI_Controller{

public function index(){

$data['main']="home_view";
$this->load->view('layout/Login',$data);

}


}


?>