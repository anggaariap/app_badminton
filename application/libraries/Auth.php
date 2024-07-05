<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth {

	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('Admin_model','admin');
		$this->CI->load->model('Member_model','member');
	}

	public function login_admin($username,$password)
	{
		$check = $this->CI->admin->login($username,$password);
		if ($check)
		{
			$data = [
				'id'				=> $check->id_admin,
				'nama'				=> $check->nama_admin,
				'login'				=> true
			];
			
			$this->CI->session->set_userdata($data);
			redirect(base_url('dashboard'),'refresh');
		}else{
			$q = 0;
			return $q;
		}
	}

	public function login_member($username,$password)
	{
		$check = $this->CI->member->login($username,$password);
		if ($check)
		{
			$data = [
				'id'				=> $check->id_member,
				'nama'				=> $check->nama_member,
				'level'				=> 'Member',
				'login'				=> true
			];
			
			$this->CI->session->set_userdata($data);
			redirect(base_url('home'),'refresh');
		}else{
			$q = 0;
			return $q;
		}
	}


	public function cek()
	{
		if ($this->CI->session->userdata('login') == '') {
			redirect(base_url('login'),'refresh');
		}
	}

	public function logout()
	{
		$data = array(
			'id',
			'nama',
			'level',
			'login'
		);
		$this->CI->session->unset_userdata($data);
		$this->CI->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Anda berhasil logout!');
		redirect(base_url('login'),'refresh');
	}

}