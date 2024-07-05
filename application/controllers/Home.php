<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Lapangan_model', 'lapangan');
		$this->load->model('Pengumuman_model', 'pengumuman');
		$this->load->helper('tgl_indo');
        $this->load->library('template');
	}
    
	public function index()
	{

		$data = array(
			'title'			=> 'Pemesanan Lapangan',
			'data' 			=> $this->lapangan->tabel()->result(),
			'pengumuman' 	=> $this->pengumuman->tabel()->result()
		);

		$this->template->load('template', 'contents' , 'front/index', $data);
	}

	public function pengumuman($id)
	{
		$cek = $this->pengumuman->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data tidak ditemukan');
			redirect(base_url('home'),'refresh');
		}else{

			$data = array(
				'title'			=> 'Pemesanan Lapangan',
				'data' 			=> $this->pengumuman->detail($id)->row_array()
			);

			$this->template->load('template', 'contents' , 'front/pengumuman', $data);
		}

	}


	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */