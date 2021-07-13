<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_beranda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('user/m_beranda', 'beranda');

		error_reporting(0);
	}

    public function index()
	{
		$data['title'] = 'Sistem Cerdas';

		$this->load->view('user/v_header', $data);
		$this->load->view('user/v_navbar');
		$this->load->view('user/v_sidebar');
		$this->load->view('user/v_beranda');
		$this->load->view('user/v_footer');
	}
}
