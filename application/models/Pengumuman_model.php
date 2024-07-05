<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_pengumuman');
			$this->db->join('tbl_admin', 'tbl_pengumuman.id_admin = tbl_admin.id_admin');
			$this->db->order_by('tbl_pengumuman.id_pengumuman', 'Asc');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_pengumuman');
			$this->db->join('tbl_admin', 'tbl_pengumuman.id_admin = tbl_admin.id_admin');
			$this->db->order_by('tbl_pengumuman.id_pengumuman', 'Asc');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}

	public function cekpengguna($where)
	{
		$this->db->select('*');
		$this->db->from('tbl_pengumuman');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}

	public function jumlah_pengguna()
    {
        $this->db->select('count(id) as j_pengguna');
		$this->db->from('tbl_pengumuman');
		$query = $this->db->get()->row();
		return $query->j_pengguna;
    }

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_pengumuman');
		$this->db->join('tbl_admin', 'tbl_pengumuman.id_admin = tbl_admin.id_admin');
		$this->db->where('id_pengumuman', $id);
		$query = $this->db->get();
		return $query;
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_pengumuman');
		$this->db->where('email_pengumuman', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert($data)
	{
		$this->db->insert('tbl_pengumuman', $data);
	}

	public function update($data)
	{
		$this->db->where('id_pengumuman', $data['id_pengumuman']);
		$this->db->update('tbl_pengumuman', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_pengumuman', $data['id_pengumuman']);
		$this->db->delete('tbl_pengumuman');
	}

}
