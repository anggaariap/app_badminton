<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jam_sewa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_jam_sewa');
			$this->db->join('tbl_pemesanan', 'tbl_jam_sewa.no_pemesanan = tbl_pemesanan.no_pemesanan');
			$this->db->order_by('tbl_jam_sewa.id_jam_sewa', 'Asc');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_jam_sewa');
			$this->db->join('tbl_pemesanan', 'tbl_jam_sewa.no_pemesanan = tbl_pemesanan.no_pemesanan');
			$this->db->order_by('tbl_jam_sewa.id_jam_sewa', 'Asc');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}

	public function cekpengguna($where)
	{
		$this->db->select('*');
		$this->db->from('tbl_jam_sewa');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}

	public function jumlah_pengguna()
    {
        $this->db->select('count(id) as j_pengguna');
		$this->db->from('tbl_jam_sewa');
		$query = $this->db->get()->row();
		return $query->j_pengguna;
    }

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_jam_sewa');
		$this->db->where('id_jam_sewa', $id);
		$query = $this->db->get();
		return $query;
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_jam_sewa');
		$this->db->where('email_jam_sewa', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function login($username,$enpass)
	{
		$username = $this->db->escape_str($username);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('tbl_jam_sewa');
		$this->db->where(array(
			'tbl_jam_sewa.email_jam_sewa' => $username,
			'tbl_jam_sewa.password_jam_sewa' => $password
		));
		$query = $this->db->get();
		return $query->row();
	}

	public function insert($data)
	{
		$this->db->insert('tbl_jam_sewa', $data);
	}

	public function update($data)
	{
		$this->db->where('id_jam_sewa', $data['id_jam_sewa']);
		$this->db->update('tbl_jam_sewa', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_jam_sewa', $data['id_jam_sewa']);
		$this->db->delete('tbl_jam_sewa');
	}

}
