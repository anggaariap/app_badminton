<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Lapangan_model', 'lapangan');
		$this->load->helper('tgl_indo');
	}

	public function index()
	{
		$data = array(
			'title'			=> ' lapangan',
			'judul'			=> 'Master Data lapangan',
			'data' 			=> $this->lapangan->tabel()->result(),
			'content'		=> 'lapangan/v_content',
			'ajax'	 		=> 'lapangan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'title'			=> ' Tambah lapangan',
			'judul'			=> 'Tambah Data lapangan',
			'data' 			=> $this->lapangan->tabel(),
			'content'		=> 'lapangan/v_add',
			'ajax'	 		=> 'lapangan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function edit($id)
	{
		$cek = $this->lapangan->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data tidak ditemukan');
			redirect(base_url('lapangan'),'refresh');
		}else{

			$data = array(
				'title'			=> ' Edit lapangan',
				'judul'			=> 'Edit Data lapangan',
				'data' 			=> 	$this->lapangan->detail($id)->row_array(),
				'content'		=> 'lapangan/v_edit',
				'ajax'	 		=> 'lapangan/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}
	}


	public function insert()
	{
		$this->form_validation->set_rules('nama_lapangan', 'Nama Lapangan', 'required',
		array( 'required'  => '%s harus diisi!'));

			$image 								= time().'-'.$_FILES["foto_lapangan"]['name']; //data post dari form
			$config['upload_path'] 				= './public/image/upload/lapangan/'; //lokasi folder foto produk
			$config['allowed_types'] 			= 'jpg|png|jpeg'; //jenis file yang boleh diijinkan
        	$config['max_size']                 = '2048'; // Ukuran maksimum dalam KB
        	$config['max_width']                = '1024'; // Lebar maksimum gambar
        	$config['max_height']               = '768'; // Tinggi maksimum gambar
			$config['file_name']  				= $image; //ubah nama file berdasarkan waktu

			$this->load->library('upload', $config); //panggil librarys upload
			$this->upload->do_upload('foto_lapangan'); //upload foto produk

			$data = array(
				'nama_lapangan'   				=> $this->input->post('nama_lapangan'),
				'foto_lapangan'					=> $image
			);

			$q = $this->lapangan->insert($data);

			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
			redirect(base_url('lapangan'),'refresh');

		
	}

	public function update()
	{
		$cek = $this->lapangan->detail($this->input->post('id_lapangan'))->row_array();

		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('lapangan'),'refresh');
		}else{

				$this->form_validation->set_rules('id_lapangan', 'ID Lapangan', 'required',
				array( 'required'  => '%s harus diisi!'));

				if($_FILES["foto_lapangan"]['name'] !== ""){ //jika tidak ada upload foto

					$image 								= time().'-'.$_FILES["foto_lapangan"]['name']; //data post dari form
					$config['upload_path'] 				= './public/image/upload/lapangan/'; //lokasi folder foto produk
					$config['allowed_types'] 			= 'jpg|png|jpeg'; //jenis file yang boleh diijinkan
        			$config['max_size']                 = '2048'; // Ukuran maksimum dalam KB
        			$config['max_width']                = '1024'; // Lebar maksimum gambar
        			$config['max_height']               = '768'; // Tinggi maksimum gambar
					$config['file_name']  				= $image; //ubah nama file berdasarkan waktu

					$this->load->library('upload', $config); //panggil librarys upload
					$this->upload->do_upload('foto_lapangan'); //upload foto produk

						$data = array(
							'id_lapangan'					=> $this->input->post('id_lapangan'),
							'foto_lapangan'					=> $image
						);
						
						$q = $this->lapangan->update($data);

				}

				$data = array(
					'id_lapangan'					=> $this->input->post('id_lapangan'),
					'nama_lapangan'   				=> $this->input->post('nama_lapangan')
				);

				$this->lapangan->update($data);
				$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dirubah');
				redirect(base_url('lapangan'),'refresh');
		}
			
	}

	public function delete($id)
	{
		$cek = $this->lapangan->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('lapangan'),'refresh');
		}else{

			$data = array(
				'id_lapangan'	=> $id
			);
			
			$this->lapangan->delete($data);
			
			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dihapus');
			redirect(base_url('lapangan'),'refresh');
		}
		

	}


}
