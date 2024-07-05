<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alur extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Lapangan_model', 'lapangan');
		$this->load->model('Pemesanan_model', 'pemesanan');
		$this->load->model('Jadwal_model', 'jadwal');
		$this->load->model('Jam_sewa_model', 'jam_sewa');
		$this->load->helper('tgl_indo');
		$this->load->helper('security');
		$this->load->library('template');
		$this->load->library('Pdf');
	}

	public function index()
	{
		$data = array(
			'title'			=> 'Alur'
		);
		$this->template->load('template', 'contents' , 'front/alur', $data);
	}


}

/* End of file Guru.php */
/* Location: ./application/controllers/pemesanan/Guru.php */