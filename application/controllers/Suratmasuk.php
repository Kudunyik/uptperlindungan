<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Pengawasan extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->model('surat_masuk');

	}
	public function index()
	{
		$data['data']=$this->db->get('suratmasuk');
		$this->load->view('suratmasuk',$data);
	}	

}