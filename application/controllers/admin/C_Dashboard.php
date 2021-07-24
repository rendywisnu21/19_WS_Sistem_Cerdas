<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('user/M_berandau', 'beranda');		

		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');

		}
	}

	public function index()
	{
		$data['title'] = 'Workshop Sistem Cerdas';

		$data['Rule'] = $this->beranda->get_beranda()->result();
		$data['rule'] = $this->beranda->get_rule()->result();
		$data['suhu'] = $this->beranda->get_suhu()->result();
		$data['ph'] = $this->beranda->get_ph()->result();
		$data['tds'] = $this->beranda->get_tds()->result();


        $this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/v_dashboard', $data);
		$this->load->view('admin/template_adm/v_footer');
	}
}
