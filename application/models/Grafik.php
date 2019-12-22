<?php

class Grafik extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
 
	public function graph()
	{
		$data = $this->db->query("SELECT * from buah");
		return $data->result();
	}
 
}