<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengumuman_model', 'pengumuman');
		$this->load->model('Admin_model', 'admin');
		$this->load->helper('tgl_indo');
	}

	public function index()
	{
		$data = array(
			'title'			=> ' Pengumuman',
			'judul'			=> 'Data Pengumuman',
			'data' 			=> $this->pengumuman->tabel()->result(),
			'content'		=> 'pengumuman/v_content',
			'ajax'	 		=> 'pengumuman/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'list_admin' 	=> $this->admin->tabel()->result(),
			'title'			=> ' Tambah Pengumuman',
			'judul'			=> 'Tambah Data Pengumuman',
			'data' 			=> $this->pengumuman->tabel(),
			'content'		=> 'pengumuman/v_add',
			'ajax'	 		=> 'pengumuman/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function edit($id)
	{
		$cek = $this->pengumuman->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data tidak ditemukan');
			redirect(base_url('pengumuman'),'refresh');
		}else{

			$data = array(
				'list_admin' 	=> $this->admin->tabel()->result(),
				'title'			=> ' Edit Pengumuman',
				'judul'			=> 'Edit Data Pengumuman',
				'data' 			=> 	$this->pengumuman->detail($id)->row_array(),
				'content'		=> 'pengumuman/v_edit',
				'ajax'	 		=> 'pengumuman/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}
	}


	public function insert()
	{
		$this->form_validation->set_rules('judul_pengumuman', 'Judul Pengumuman', 'required',
		array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{

			$data = array(
				'judul_pengumuman'     		=> $this->input->post('judul_pengumuman'),
				'isi_pengumuman'     		=> $this->input->post('isi_pengumuman'),
				'tgl_pengumuman'     		=> $this->input->post('tgl_pengumuman'),
				'id_admin'    				=> $this->input->post('id_admin')
			);

			$q = $this->pengumuman->insert($data);

			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
			redirect(base_url('pengumuman'),'refresh');
		}else{
			
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data belum lengkap');
			redirect(base_url('pengumuman/add'),'refresh');
		}

	}

	public function update()
	{

		$id = $this->input->post('id_pengumuman');

		$cek = $this->pengumuman->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('pengumuman'),'refresh');
		}else{

				$this->form_validation->set_rules('id_pengumuman', 'ID pengumuman', 'required',
				array( 'required'  => '%s harus diisi!'));

				if ($this->form_validation->run()) 
				{
					$data = array(
						'id_pengumuman'				=> $this->input->post('id_pengumuman'),
						'judul_pengumuman'     		=> $this->input->post('judul_pengumuman'),
						'isi_pengumuman'     		=> $this->input->post('isi_pengumuman'),
						'tgl_pengumuman'     		=> $this->input->post('tgl_pengumuman'),
						'id_admin'    				=> $this->input->post('id_admin')
					);

					$this->pengumuman->update($data);
			
					$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dirubah');
					redirect(base_url('pengumuman'),'refresh');
				}else{

					$this->session->set_flashdata('warning', '<i class="fa fa-check"></i> Peringatan! Data Belum Lengkap');
					redirect(base_url('pengumuman/edit/'.$this->input->post('id')),'refresh');
				}
				
		}
			
	}

	public function delete($id)
	{
		$cek = $this->pengumuman->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('pengumuman'),'refresh');
		}else{

			$data = array(
				'id_pengumuman'	=> $id
			);
			
			$this->pengumuman->delete($data);
			
			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dihapus');
			redirect(base_url('pengumuman'),'refresh');
		}
		

	}


}
