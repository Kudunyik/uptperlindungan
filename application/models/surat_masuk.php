<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class surat_masuk extends CI_Model {
	private $table="suratmasuk";
	private $primary="id_no_urut";

	public function __construct()
	{
		parent:: __construct();

	}

	public function getdatapengawasan($key)
	{
		$k= $this->db->query("select*from suratmasuk where id_no_urut ='$key'");
		return $k;
	}

}