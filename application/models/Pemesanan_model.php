<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_pemesanan');
			$this->db->join('tbl_member', 'tbl_pemesanan.id_member = tbl_member.id_member');
			$this->db->join('tbl_lapangan', 'tbl_pemesanan.id_lapangan = tbl_lapangan.id_lapangan');
			$this->db->join('tbl_jadwal', 'tbl_pemesanan.id_jadwal = tbl_jadwal.id_jadwal');
			$this->db->order_by('tbl_pemesanan.id_pemesanan', 'Asc');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_pemesanan');
			$this->db->join('tbl_member', 'tbl_pemesanan.id_member = tbl_member.id_member');
			$this->db->join('tbl_lapangan', 'tbl_pemesanan.id_lapangan = tbl_lapangan.id_lapangan');
			$this->db->join('tbl_jadwal', 'tbl_pemesanan.id_jadwal = tbl_jadwal.id_jadwal');
			$this->db->order_by('tbl_pemesanan.id_pemesanan', 'Asc');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}

	public function cekpengguna($where)
	{
		$this->db->select('*');
		$this->db->from('tbl_pemesanan');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}

	public function jumlah_pengguna()
    {
        $this->db->select('count(id) as j_pengguna');
		$this->db->from('tbl_pemesanan');
		$query = $this->db->get()->row();
		return $query->j_pengguna;
    }

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_pemesanan');
		$this->db->join('tbl_member', 'tbl_pemesanan.id_member = tbl_member.id_member');
		$this->db->join('tbl_lapangan', 'tbl_pemesanan.id_lapangan = tbl_lapangan.id_lapangan');
		$this->db->join('tbl_jadwal', 'tbl_pemesanan.id_jadwal = tbl_jadwal.id_jadwal');
		$this->db->where('id_pemesanan', $id);
		$query = $this->db->get();
		return $query;
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('tbl_pemesanan');
		$this->db->where('email_pemesanan', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert($data)
	{
		$this->db->insert('tbl_pemesanan', $data);
	}

	public function update($data)
	{
		$this->db->where('id_pemesanan', $data['id_pemesanan']);
		$this->db->update('tbl_pemesanan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_pemesanan', $data['id_pemesanan']);
		$this->db->delete('tbl_pemesanan');
	}

	function get_no_pemesanan(){
        $q = $this->db->query("SELECT MAX(RIGHT(no_pemesanan,2)) AS kd_max FROM tbl_pemesanan WHERE DATE(tgl_pemesanan)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%02s", $tmp);
            }
        }else{
            $kd = "01";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('ymd').$kd;
    }

}
