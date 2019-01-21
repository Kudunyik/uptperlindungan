<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengawasan_model extends CI_Model {
	private $table="pengawasan";
	private $primary="id_pengawasan";

	public function __construct()
	{
		parent:: __construct();

	}

	public function getdatapengawasan($key)
	{
		$k= $this->db->query("select*from pengawasan where id_pengawasan ='$key'");
		return $k;
	}

	public function getinsert($data)
	{
		$this->db->insert('pengawasan',$data);

	}

	public function hapus($id){
		$this->db->where($this->primary, $id);
		$this->db->delete($this->table);
    }



}
