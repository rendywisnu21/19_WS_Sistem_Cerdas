<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_riwayat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/m_riwayat', 'riwayat');

		error_reporting(0);
	}

    public function index()
	{
		$data['title'] = 'Riwayat Hasil Hitung Kualitas Air';
		
		/** Mengambil data kelas */
		// $data['tds'] = $this->rule->gettds()->result();

		$this->load->view('user/v_header', $data);
		$this->load->view('user/v_navbar');
		$this->load->view('user/v_sidebar');
		$this->load->view('user/v_riwayat');
		$this->load->view('user/v_footer');
	}
}
