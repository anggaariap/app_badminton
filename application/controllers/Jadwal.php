<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jadwal_model', 'jadwal');
		$this->load->helper('tgl_indo');
	}

	public function index()
	{
		$data = array(
			'title'			=> 'Jadwal',
			'judul'			=> 'Master Data jadwal',
			'data' 			=> $this->jadwal->tabel()->result(),
			'content'		=> 'jadwal/v_content',
			'ajax'	 		=> 'jadwal/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'title'			=> 'Tambah jadwal',
			'judul'			=> 'Tambah Data jadwal',
			'data' 			=> $this->jadwal->tabel(),
			'content'		=> 'jadwal/v_add',
			'ajax'	 		=> 'jadwal/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function edit($id)
	{
		$cek = $this->jadwal->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data tidak ditemukan');
			redirect(base_url('jadwal'),'refresh');
		}else{

			$data = array(
				'title'			=> 'Edit Jadwal',
				'judul'			=> 'Edit Data Jadwal',
				'data' 			=> 	$this->jadwal->detail($id)->row_array(),
				'content'		=> 'jadwal/v_edit',
				'ajax'	 		=> 'jadwal/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}
	}


	public function insert()
	{
		$this->form_validation->set_rules('jam', 'Nama jadwal', 'required',
		array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{

			$data = array(
				'jam'     		=> $this->input->post('jam')
			);

			$q = $this->jadwal->insert($data);

			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
			redirect(base_url('jadwal'),'refresh');
		}else{
			
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data belum lengkap');
			redirect(base_url('jadwal/add'),'refresh');
		}

	}

	public function update()
	{

		$id = $this->input->post('id_jadwal');

		$cek = $this->jadwal->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('jadwal'),'refresh');
		}else{

				$this->form_validation->set_rules('id_jadwal', 'ID jadwal', 'required',
				array( 'required'  => '%s harus diisi!'));

				if ($this->form_validation->run()) 
				{
					$data = array(
						'id_jadwal'		=> $this->input->post('id_jadwal'),
						'jam'     		=> $this->input->post('jam')
					);

					$this->jadwal->update($data);
			
					$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dirubah');
					redirect(base_url('jadwal'),'refresh');
				}else{

					$this->session->set_flashdata('warning', '<i class="fa fa-check"></i> Peringatan! Data Belum Lengkap');
					redirect(base_url('jadwal/edit/'.$this->input->post('id')),'refresh');
				}
				
		}
			
	}

	public function delete($id)
	{
		$cek = $this->jadwal->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('jadwal'),'refresh');
		}else{

			$data = array(
				'id_jadwal'	=> $id
			);
			
			$this->jadwal->delete($data);
			
			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dihapus');
			redirect(base_url('jadwal'),'refresh');
		}
		

	}


}
