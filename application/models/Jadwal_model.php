<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_jadwal');
			$this->db->order_by('tbl_jadwal.id_jadwal', 'Asc');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_jadwal');
			$this->db->order_by('tbl_jadwal.id_jadwal', 'Asc');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}

	public function cekpengguna($where)
	{
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}

	public function jumlah_pengguna()
    {
        $this->db->select('count(id) as j_pengguna');
		$this->db->from('tbl_jadwal');
		$query = $this->db->get()->row();
		return $query->j_pengguna;
    }

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->where('id_jadwal', $id);
		$query = $this->db->get();
		return $query;
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->where('email_jadwal', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function login($username,$enpass)
	{
		$username = $this->db->escape_str($username);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('tbl_jadwal');
		$this->db->where(array(
			'tbl_jadwal.email_jadwal' => $username,
			'tbl_jadwal.password_jadwal' => $password
		));
		$query = $this->db->get();
		return $query->row();
	}

	public function insert($data)
	{
		$this->db->insert('tbl_jadwal', $data);
	}

	public function update($data)
	{
		$this->db->where('id_jadwal', $data['id_jadwal']);
		$this->db->update('tbl_jadwal', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_jadwal', $data['id_jadwal']);
		$this->db->delete('tbl_jadwal');
	}

}
