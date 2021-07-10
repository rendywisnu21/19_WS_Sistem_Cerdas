<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Workshop Sistem Cerdas';

        $this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/v_dashboard');
		$this->load->view('admin/template_adm/v_footer');
	}
}
