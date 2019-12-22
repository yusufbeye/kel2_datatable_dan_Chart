<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CetakConroller extends CI_Controller {
 function __construct(){
  parent::__construct();
 }

 public function index(){
  $data = array(
   'record' => $this->db->get('buah')
  );
  $this->load->view('cetak',$data);
 }

 public function cetak_id($id) {
     $data = array(
      'record'  => $this->db->query("SELECT * FROM buah where id_buah='$id'"),
    );
    $this->load->view('cetak',$data);
    $html = $this->output->get_output();
    $this->load->library('dompdf_gen');
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $sekarang=date("d:F:Y:h:m:s");
    $this->dompdf->stream("penjualan".$sekarang.".pdf",array('Attachment'=>0));
 }
}