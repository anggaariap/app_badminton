<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pemesanan_model', 'pemesanan');
		$this->load->model('Member_model', 'member');
		$this->load->model('Jadwal_model', 'jadwal');
		$this->load->model('Lapangan_model', 'lapangan');
		$this->load->helper('tgl_indo');
		$this->load->library('Pdf');
	}

	public function index()
	{
		$data = array(
			'title'			=> ' Pemesanan',
			'judul'			=> 'Data Booking Lapangan',
			'data' 			=> $this->pemesanan->tabel()->result(),
			'content'		=> 'pemesanan/v_content',
			'ajax'	 		=> 'pemesanan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'list_member' 		=> $this->member->tabel()->result(),
			'list_lapangan' 	=> $this->lapangan->tabel()->result(),
			'title'			=> ' Tambah Pemesanan',
			'judul'			=> 'Tambah Data Booking',
			'data' 			=> $this->pemesanan->tabel(),
			'content'		=> 'pemesanan/v_add',
			'ajax'	 		=> 'pemesanan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}


	public function edit($id)
	{
		$cek = $this->pemesanan->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data tidak ditemukan');
			redirect(base_url('pemesanan'),'refresh');
		}else{

			$data = array(
				'list_member' 		=> $this->member->tabel()->result(),
				'list_lapangan' 	=> $this->lapangan->tabel()->result(),
				'list_jadwal' 	=> $this->jadwal->tabel()->result(),
				'title'			=> ' Edit Pemesanan',
				'judul'			=> 'Edit Data Booking',
				'data' 			=> 	$this->pemesanan->detail($id)->row_array(),
				'content'		=> 'pemesanan/v_edit',
				'ajax'	 		=> 'pemesanan/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}
	}


	public function insert()
	{
		$this->form_validation->set_rules('no_pemesanan', 'No Pemesanan', 'required',
		array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{

			$data = array(
				'no_pemesanan'     			=> $this->input->post('no_pemesanan'),
				'tgl_pemesanan'     		=> $this->input->post('tgl_pemesanan'),
				'tgl_sewa'     				=> $this->input->post('tgl_sewa'),
				'id_member'    				=> $this->input->post('id_member'),
				'id_lapangan'   			=> $this->input->post('id_lapangan')
			);

			$q = $this->pemesanan->insert($data);

			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
			redirect(base_url('pemesanan'),'refresh');
		}else{
			
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data belum lengkap');
			redirect(base_url('pemesanan/add'),'refresh');
		}

	}

	public function update()
	{

		$id = $this->input->post('id_pemesanan');

		$cek = $this->pemesanan->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('pemesanan'),'refresh');
		}else{

				$this->form_validation->set_rules('id_pemesanan', 'ID pemesanan', 'required',
				array( 'required'  => '%s harus diisi!'));

				if ($this->form_validation->run()) 
				{
					$data = array(
						'id_pemesanan'				=> $this->input->post('id_pemesanan'),
						'no_pemesanan'     			=> $this->input->post('no_pemesanan'),
						'tgl_pemesanan'     		=> $this->input->post('tgl_pemesanan'),
						'tgl_sewa'     				=> $this->input->post('tgl_sewa'),
						'id_jadwal'     			=> $this->input->post('id_jadwal'),
						'id_member'    				=> $this->input->post('id_member'),
						'id_lapangan'   			=> $this->input->post('id_lapangan')
					);

					$this->pemesanan->update($data);
			
					$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dirubah');
					redirect(base_url('pemesanan'),'refresh');
				}else{

					$this->session->set_flashdata('warning', '<i class="fa fa-check"></i> Peringatan! Data Belum Lengkap');
					redirect(base_url('pemesanan/edit/'.$this->input->post('id')),'refresh');
				}
				
		}
			
	}

	public function delete($id)
	{
		$cek = $this->pemesanan->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('pemesanan'),'refresh');
		}else{

			$data = array(
				'id_pemesanan'	=> $id
			);
			
			$this->pemesanan->delete($data);
			
			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat! Data Berhasil Dihapus');
			redirect(base_url('pemesanan'),'refresh');
		}
		

	}

	public function cetak()
	{
		$logo = '<img src="public/image/ades.png" width="75" height="75">';
		$data_pemesanan = $this->pemesanan->tabel()->result();
		
		$isi_pemesanan = '
		
			<style>
				h5{
					text-align: center;
					text-font: 11px;
					padding: 0px;
					font-weight: reguler;
				}
			</style> ';

			$isi_pemesanan .= '
			<table border="0" style="font-size: 12px; padding:1; width: 1090px;">
				<thead>
					<tr align="center">
						<th style="width: 100%;">'.$logo.'</th>
					</tr>
					<tr align="center">
						<th style="width: 100%; font-size: 20px; "><b>HAMDALAH SPORT</b></th>
					</tr>
					<tr align="center">
						<th style="width: 100%; border-bottom-style: solid; font-size: 14px; border-bottom-color: black;"></th>
					</tr>
				</thead>
			</table>';

			$isi_pemesanan .= '
			<table border="0" style="font-size: 12px; padding:5; width: 1090px;">
				<thead>
					<tr align="center">
						<th style="width: 100%;"></th>
					</tr>
					<tr align="center">
						<th style="width: 100%; font-size: 18px;"><b> LAPORAN DATA BOOKING </b></th>
					</tr>
				</thead>
			</table>';

			
			$isi_pemesanan .= '
			<table border="1" style="font-size: 12px; padding:5; width: 1050px;">
				<thead>
					<tr align="center">
						<th width="3%">No</th>
						<th style="width: 15%; text-align: center;">No Pemesanan</th>
						<th style="width: 15%; text-align: center;">Tanggal Pemesanan</th>
						<th style="width: 15%; text-align: center;">Tanggal Sewa</th>
						<th style="width: 10%; text-align: center;">Jam Sewa</th>
						<th style="width: 10%; text-align: center;">Lama Sewa</th>
						<th style="width: 20%; text-align: center;">Nama Member</th>
						<th style="width: 15%; text-align: center;">Nama Lapangan</th>
					</tr>
				</thead>
				<tbody>';
				$no = 1;
				foreach($data_pemesanan as $row){
					
					$isi_pemesanan .= '
							<tr>
								<td width="3%">'.$no++.'</td>
								<td style="width: 15%; text-align: center;">'.$row->no_pemesanan.'</td>
								<td style="width: 15%; text-align: center;">'.date_indo($row->tgl_pemesanan).'</td>
								<td style="width: 15%; text-align: center;">'.date_indo($row->tgl_sewa).'</td>
								<td style="width: 10%; text-align: center;">'.$row->jam.'</td>
								<td style="width: 10%; text-align: center;">'.$row->lama_sewa.' Jam</td>
								<td style="width: 20%; text-align: center;">'.$row->nama_member.'</td>
								<td style="width: 15%; text-align: center;">'.$row->nama_lapangan.'</td>
							</tr>
					';
				}

			$isi_pemesanan .=	'
				</tbody>
			</table>';

				

			$data = array(
				'isi'			=> $isi_pemesanan
			);
		
		
		$this->load->view('pemesanan/cetakpdf', $data, FALSE);

	}


}
