<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model', 'member');
		$this->load->helper('tgl_indo');
	}

	public function index()
	{
		$data = array(
			'title'			=> ' Member',
			'judul'			=> 'Master Data Member',
			'data' 			=> $this->member->tabel()->result(),
			'content'		=> 'member/v_content',
			'ajax'	 		=> 'member/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'title'			=> ' Tambah Member',
			'judul'			=> 'Tambah Data Member',
			'data' 			=> $this->member->tabel(),
			'content'		=> 'member/v_add',
			'ajax'	 		=> 'member/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function edit($id)
	{
		$cek = $this->member->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data tidak ditemukan');
			redirect(base_url('member'),'refresh');
		}else{

			$data = array(
				'title'			=> ' Edit Member',
				'judul'			=> 'Edit Data Member',
				'data' 			=> 	$this->member->detail($id)->row_array(),
				'content'		=> 'member/v_edit',
				'ajax'	 		=> 'member/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}
	}


	public function insert()
	{
		$this->form_validation->set_rules('nama_member', 'Nama Member', 'required',
		array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{

			$data = array(
				'nama_member'     		=> $this->input->post('nama_member'),
				'no_hp'     			=> $this->input->post('no_hp'),
				'email'    				=> $this->input->post('email'),
				'password'   			=> $this->input->post('password')
			);

			$q = $this->member->insert($data);

			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
			redirect(base_url('member'),'refresh');
		}else{
			
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data belum lengkap');
			redirect(base_url('member/add'),'refresh');
		}

	}

	public function update()
	{

		$id = $this->input->post('id_member');

		$cek = $this->member->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('member'),'refresh');
		}else{

				$this->form_validation->set_rules('id_member', 'ID member', 'required',
				array( 'required'  => '%s harus diisi!'));

				if ($this->form_validation->run()) 
				{
					$data = array(
						'id_member'				=> $this->input->post('id_member'),
						'nama_member'     		=> $this->input->post('nama_member'),
						'no_hp'     			=> $this->input->post('no_hp'),
						'email'    				=> $this->input->post('email'),
						'password'   			=> $this->input->post('password')
					);

					$this->member->update($data);
			
					$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dirubah');
					redirect(base_url('member'),'refresh');
				}else{

					$this->session->set_flashdata('warning', '<i class="fa fa-check"></i> Peringatan! Data Belum Lengkap');
					redirect(base_url('member/edit/'.$this->input->post('id')),'refresh');
				}
				
		}
			
	}

	public function delete($id)
	{
		$cek = $this->member->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('member'),'refresh');
		}else{

			$data = array(
				'id_member'	=> $id
			);
			
			$this->member->delete($data);
			
			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dihapus');
			redirect(base_url('member'),'refresh');
		}
		

	}


}
