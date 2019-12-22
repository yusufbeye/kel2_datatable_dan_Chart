<?php
class GrafikController extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('grafik');
	}
 
	public function index()
	{
		$data['graph'] = $this->grafik->graph();
		$this->load->view('chart', $data);
	}
 
}