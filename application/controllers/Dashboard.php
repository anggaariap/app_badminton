<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->auth->cek();
		$this->load->model('Admin_model', 'admin');
		$this->load->model('Member_model', 'member');
		$this->load->model('Lapangan_model', 'lapangan');
		$this->load->model('Pemesanan_model', 'pemesanan');
		$this->load->helper('tgl_indo');
	}
  
	public function index()
	{
			
			$data = array(
				'title'						=> $this->session->userdata('level').' - Dashboard',
				'admin'						=> $this->session->userdata('nama'),
				'jumlah_member' 			=> $this->member->tabel()->num_rows(),
				'jumlah_lapangan' 			=> $this->lapangan->tabel()->num_rows(),
				'jumlah_pemesanan' 			=> $this->pemesanan->tabel()->num_rows(),
				'content'	 				=> 'dashboard/v_content',
				'ajax'	 					=> 'dashboard/v_ajax'
			);

			$this->load->view('layout/v_wrapper', $data, FALSE);
		
	}
}

/* End of file Badminton.php */
/* Location: ./application/controllers/dashboard/Badminton.php */