<?php
defined('BASEPATH') or exit('no direct script allowed');


class Trajet_pdf extends CI_Controller{
 

    public function __construct() {        
    parent::__construct();
}


function Header()
  {
    $this->SetFont('Arial','B',15);
    $this->Cell(276,5,"VendorDetails",0,0,'C');
    $this->ln(15);
    $this->SetFont('Arial','B',10);
    $this->Cell(55,10,"Name",1,0,'C');
    $this->Cell(90,10,"Address",1,0,'C');
    $this->Cell(50,10,"Telephone",1,0,'C');
    $this->Cell(70,10,"Email",1,0,'C');
    $this->ln();
  }
function Footer(){
$this->SetY(-15);
$this->SetFont('Arial','I',8);
 $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}




function pdf(){
 $this->load->library('fpdf_gen');
 $voiture=$this->input->get('voiture');	
 $this->load->model('Frontoffice_model');
 $data=array('voiture'=>$this->Frontoffice_model->trajet_voiture($voiture));
  
  
 
  
$this->pdf->SetMargins(15, 10, 20);
$this->pdf->AliasNbPages();
$this->pdf->AddPage('L','A4',0);
$this->pdf->viewdata();
$this->pdf->Output();


   }


}




