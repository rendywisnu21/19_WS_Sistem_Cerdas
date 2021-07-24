<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_beranda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/M_berandau', 'beranda');

		error_reporting(0);
	}

    public function index()
	{
		$data['title'] = 'Sistem Cerdas';

		//mengambil data
		$data['Rule'] = $this->beranda->get_beranda()->result();
		$data['rule'] = $this->beranda->get_rule()->result();
		$data['suhu'] = $this->beranda->get_suhu()->result();
		$data['ph'] = $this->beranda->get_ph()->result();
		$data['tds'] = $this->beranda->get_tds()->result();

		$this->load->view('user/v_header', $data);
		$this->load->view('user/v_navbar');
		$this->load->view('user/v_sidebar');
		$this->load->view('user/v_beranda', $data);
		$this->load->view('user/v_footer');
	}
}
