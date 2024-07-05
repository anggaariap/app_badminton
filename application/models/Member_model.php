<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_member');
			$this->db->order_by('tbl_member.id_member', 'Asc');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_member');
			$this->db->order_by('tbl_member.id_member', 'Asc');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}

	public function cekpengguna($where)
	{
		$this->db->select('*');
		$this->db->from('tbl_member');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}

	public function login($username,$enpass)
	{
		$username = $this->db->escape_str($username);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('tbl_member');
		$this->db->where(array(
			'tbl_member.email' => $username,
			'tbl_member.password' => $password
		));
		$query = $this->db->get();
		return $query->row();
	}

	public function jumlah_pengguna()
    {
        $this->db->select('count(id) as j_pengguna');
		$this->db->from('tbl_member');
		$query = $this->db->get()->row();
		return $query->j_pengguna;
    }

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_member');
		$this->db->where('id_member', $id);
		$query = $this->db->get();
		return $query;
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_member');
		$this->db->where('email_member', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert($data)
	{
		$this->db->insert('tbl_member', $data);
	}

	public function update($data)
	{
		$this->db->where('id_member', $data['id_member']);
		$this->db->update('tbl_member', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_member', $data['id_member']);
		$this->db->delete('tbl_member');
	}

}
