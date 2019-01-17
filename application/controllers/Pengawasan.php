<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengawasan extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('pengawasan_model');

	}
	public function index()
	{
		$data['data']=$this->db->get('pengawasan');
		$this->load->view('homepage/beranda',$data);
	}	

}