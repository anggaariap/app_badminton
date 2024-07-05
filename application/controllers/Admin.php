<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admin');
		$this->load->helper('tgl_indo');
	}

	public function index()
	{
		$data = array(
			'title'			=> $this->session->userdata('level').' - Admin',
			'judul'			=> 'Master Data Admin',
			'data' 			=> $this->admin->tabel()->result(),
			'content'		=> 'admin/v_content',
			'ajax'	 		=> 'admin/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'title'			=> $this->session->userdata('level').' - Tambah Admin',
			'judul'			=> 'Tambah Data Admin',
			'data' 			=> $this->admin->tabel(),
			'content'		=> 'admin/v_add',
			'ajax'	 		=> 'admin/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function edit($id)
	{
		$cek = $this->admin->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data tidak ditemukan');
			redirect(base_url('admin'),'refresh');
		}else{

			$data = array(
				'title'			=> $this->session->userdata('level').' - Edit Admin',
				'judul'			=> 'Edit Data Admin',
				'data' 			=> 	$this->admin->detail($id)->row_array(),
				'content'		=> 'admin/v_edit',
				'ajax'	 		=> 'admin/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}
	}


	public function insert()
	{
		$this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required',
		array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{

			$data = array(
				'nama_admin'     			=> $this->input->post('nama_admin'),
				'email_admin'    			=> $this->input->post('email_admin'),
				'password_admin'   			=> $this->input->post('password_admin')
			);

			$q = $this->admin->insert($data);

			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
			redirect(base_url('admin'),'refresh');
		}else{
			
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data belum lengkap');
			redirect(base_url('admin/add'),'refresh');
		}

	}

	public function update()
	{

		$id = $this->input->post('id_admin');

		$cek = $this->admin->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('admin'),'refresh');
		}else{

				$this->form_validation->set_rules('id_admin', 'ID admin', 'required',
				array( 'required'  => '%s harus diisi!'));

				if ($this->form_validation->run()) 
				{
					$data = array(
						'id_admin'					=> $this->input->post('id_admin'),
						'nama_admin'     			=> $this->input->post('nama_admin'),
						'email_admin'    			=> $this->input->post('email_admin'),
						'password_admin'   			=> $this->input->post('password_admin')
					);

					$this->admin->update($data);
			
					$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dirubah');
					redirect(base_url('admin'),'refresh');
				}else{

					$this->session->set_flashdata('warning', '<i class="fa fa-check"></i> Peringatan! Data Belum Lengkap');
					redirect(base_url('admin/edit/'.$this->input->post('id')),'refresh');
				}
				
		}
			
	}

	public function delete($id)
	{
		$cek = $this->admin->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('admin'),'refresh');
		}else{

			$data = array(
				'id_admin'	=> $id
			);
			
			$this->admin->delete($data);
			
			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dihapus');
			redirect(base_url('admin'),'refresh');
		}
		

	}


}
