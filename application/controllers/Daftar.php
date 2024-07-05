<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admin');
		$this->load->model('Member_model', 'member');
		ob_start();
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Daftar Member'
		);
		$this->load->view('daftar', $data, FALSE);
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_member', 'Nama Member', 'required',
		array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{
			if($this->input->post('email') == 'admin@gmail.com'){
				$this->session->set_flashdata('danger', '<i class="fa fa-warning"></i> Peringatan! Email Tidak Bisa Digunakan');
				redirect(base_url('daftar'),'refresh');
			}else{
				$data = array(
					'nama_member'     		=> $this->input->post('nama_member'),
					'no_hp'     			=> $this->input->post('no_hp'),
					'email'    				=> $this->input->post('email'),
					'password'   			=> $this->input->post('password')
				);

				$q = $this->member->insert($data);

				$this->session->set_flashdata('sukses', '<i class="fa fa-check"></i> Selamat, Daftar Member berhasil, silahkan login untuk memesan lapangan');
				redirect(base_url('login'),'refresh');
			}

		}else{
			
			$this->session->set_flashdata('danger', '<i class="fa fa-warning"></i> Peringatan! Data belum lengkap');
			redirect(base_url('daftar'),'refresh');
		}
	}

	public function logout()
	{
		$this->auth->logout();
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */