<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('user/m_berandaU');		

		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');

		}
	}

	public function index()
	{
		$data['title'] = 'Workshop Sistem Cerdas';

		$data['Rule'] = $this->m_berandaU->get_beranda()->result();
		$data['rule'] = $this->m_berandaU->get_rule()->result();
		$data['suhu'] = $this->m_berandaU->get_suhu()->result();
		$data['ph'] = $this->m_berandaU->get_ph()->result();
		$data['tds'] = $this->m_berandaU->get_tds()->result();


        $this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/v_dashboard', $data);
		$this->load->view('admin/template_adm/v_footer');
	}
}
