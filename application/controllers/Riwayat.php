<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->auth->cek();
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
			'title'			=> 'Pemesanan Lapangan',
			'data' 			=> $this->pemesanan->tabel('tbl_pemesanan.id_member = '.$this->session->userdata('id').'')->result()
		);
		$this->template->load('template', 'contents' , 'front/riwayat', $data);
	}

	public function add($id)
	{
		$data = array(
			'title'			=> 'Sewa Lapangan',
			'judul'			=> 'Tambah Data Booking',
			'list_jadwal'	=> 	$this->jadwal->tabel()->result(),
			'cutomer' 		=> 	$this->member->detail($this->session->userdata('id'))->row_array(),
			'id_lapangan' 	=> 	$id,
			'data_lapangan'	=> 	$this->lapangan->tabel('tbl_lapangan.id_lapangan = '.$id.'')->row_array()
		);
		$this->template->load('template', 'contents' , 'front/add', $data);
	}


	public function edit($id)
	{
		$cek = $this->pemesanan->detail($id)->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data tidak ditemukan');
			redirect(base_url('pemesanan'),'refresh');
		}else{

			$data = array(
				'title'			=> 'Sewa Lapangan',
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
		
		$this->form_validation->set_rules('tgl_sewa', 'Kd pemesanan', 'required',
		array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{
			for ($x = $this->input->post('id_jadwal'); $x <= $this->input->post('id_jadwal') + $this->input->post('lama_sewa'); $x++) {
				$cek = $this->jam_sewa->tabel('tbl_jam_sewa.id_jadwal = '.$x.' and tbl_pemesanan.tgl_pemesanan = "'.$this->input->post('tgl_sewa').'" and tbl_pemesanan.id_lapangan = '.$this->input->post('id_lapangan').'')->num_rows();
				if ($cek > 0)
				{
					$this->session->set_flashdata('error', '<i class="fa fa-closek"></i> Peringatan, jam sewa yang anda pilih tidak tersedia');
					redirect(base_url('riwayat/add/'.$this->input->post('id_lapangan')),'refresh');
				}
			}

			$no_pemesanan = $this->pemesanan->get_no_pemesanan();
			$data = array(
				'no_pemesanan'     			=> $no_pemesanan,
				'tgl_pemesanan'     		=> date('Y-m-d'),
				'tgl_sewa'     				=> $this->input->post('tgl_sewa'),
				'id_jadwal'     			=> $this->input->post('id_jadwal'),
				'lama_sewa'     			=> $this->input->post('lama_sewa'),
				'id_member'    				=> $this->session->userdata('id'),
				'id_lapangan'   			=> $this->input->post('id_lapangan')
			);

			$q = $this->pemesanan->insert($data);
			for ($x = $this->input->post('id_jadwal'); $x <= $this->input->post('id_jadwal') + $this->input->post('lama_sewa'); $x++) {
				$datajam_sewa = array(
					'no_pemesanan'     			=> $no_pemesanan,
					'id_jadwal'     			=> $x
				);
				$q = $this->jam_sewa->insert($datajam_sewa);
			}
			$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
			redirect(base_url('riwayat'),'refresh');

		}else{
			
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data belum lengkap');
			redirect(base_url('home'),'refresh');
		}

		
	}

	public function update()
	{
		$cek = $this->pemesanan->detail($this->input->post('id_pemesanan'))->row_array();
		if($cek == null){
			$this->session->set_flashdata('error', '<i class="fa fa-warning"></i> Peringatan! Data Tidak Ditemukan');
			redirect(base_url('pemesanan'),'refresh');
		}else{

				$this->form_validation->set_rules('id_pemesanan', 'ID pemesanan', 'required',
				array( 'required'  => '%s harus diisi!'));

				if ($this->form_validation->run()) 
				{
					$data = array(
						'id_pemesanan'					=> $this->input->post('id_pemesanan'),
						'kd_pemesanan'   				=> $this->input->post('kd_pemesanan'),
						'tgl_pemesanan'     			=> $this->input->post('tgl_pemesanan'),
						'tgl_sewa'     				=> $this->input->post('tgl_sewa'),
						'jumlah'     					=> $this->input->post('jumlah')
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

	public function bill($id)
	{
		$data = $this->pemesanan->tabel('tbl_pemesanan.no_pemesanan = '.$id.'')->row();


		$isi = '
		
			<style>
				h5{
					text-align: center;
					text-font: 14px;
					padding: 0px;
					font-weight: reguler;
				}
			</style>

            <table border="0" style="font-size: 16px; padding:5; width: 650px;">
				<tbody>
                    <tr style="text-align: center;">
                        <th ><b>Bukti Pemesanan Lapangan</b></th>
                    </tr>
				</tbody>
			</table>
			
			<table border="0" style="font-size: 12px; padding:5;">
				<tbody>
                    <tr style="text-align: left;">
                        <th width="130">Tanggal pemesanan</th>
                        <th width="250">: '.$data->tgl_pemesanan.'</th>

                        <th width="130">Nama Member</th>
                        <th width="250">: '.$data->nama_member.'</th>
                    </tr>
                    <tr style="text-align: left;">
                        <th>Tanggal Sewa</th>
                        <th>: '.$data->tgl_sewa.'</th>

                        <th>Jam Sewa</th>
                        <th>: '.$data->jam.'</th>
                    </tr>
                    <tr style="text-align: left;">
                        <th></th>
                        <th></th>

                        <th></th>
                        <th></th>
                    </tr>';
				
					$isi .=	'
				</tbody>
			</table>						


		';
	
			
			
		$data = array(
			'isi'			=> $isi
		);
		
		$this->load->view('laporan/v_cetak', $data, FALSE);
	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/pemesanan/Guru.php */