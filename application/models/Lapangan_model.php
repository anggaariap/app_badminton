<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_lapangan');
			$this->db->order_by('tbl_lapangan.id_lapangan', 'Asc');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_lapangan');
			$this->db->order_by('tbl_lapangan.id_lapangan', 'Asc');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}

	public function cekpengguna($where)
	{
		$this->db->select('*');
		$this->db->from('tbl_lapangan');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}

	public function jumlah_pengguna()
    {
        $this->db->select('count(id) as j_pengguna');
		$this->db->from('tbl_lapangan');
		$query = $this->db->get()->row();
		return $query->j_pengguna;
    }

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_lapangan');
		$this->db->where('id_lapangan', $id);
		$query = $this->db->get();
		return $query;
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_lapangan');
		$this->db->where('email_lapangan', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert($data)
	{
		$this->db->insert('tbl_lapangan', $data);
	}

	public function update($data)
	{
		$this->db->where('id_lapangan', $data['id_lapangan']);
		$this->db->update('tbl_lapangan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_lapangan', $data['id_lapangan']);
		$this->db->delete('tbl_lapangan');
	}

}
