<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengawasan extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->model('pengawasan_model');

	}
	public function index()
	{
		$data['data']=$this->db->get('pengawasan');
		$this->load->view('homepage/beranda',$data);
	}	


	public function tambah ()
	{
		$data['content']='homepage/v_tambahpengawasan.php';
		$this->load->view('home.php',$data);
	}

	public function simpan()
	{
		$id_pengawasan=$this->input->post('id_pengawasan');
		$tanggal_masuk=$this->input->post('tanggal_masuk'); 
		$lokasi=$this->input->post('lokasi'); 
		$barang=$this->input->post('barang'); 
		$hasil_temuan=$this->input->post('hasil_temuan');
		$tindakan=$this->input->post('tindakan');
		$info=array(
			'id_pengawasan'=>$id_pengawasan,
			'tanggal_masuk'=>$tanggal_masuk,
			'lokasi'=>$lokasi,
			'barang'=>$barang,
			'hasil_temuan'=>$hasil_temuan,
			'tindakan'=>$tindakan
		);
		$this->db->insert('pengawasan',$info);
		redirect('welcome/pagePengawasan');

	}

	public function hapusproses($id)
	{
		$this->pengawasan_model->hapus($id);
		redirect('welcome/pagePengawasan');
	}

}