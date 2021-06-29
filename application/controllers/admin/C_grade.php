<?php
class C_Grade extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');
		}
		
		$this->load->model('admin/m_grade');
	}

    public function index()
	{
		$data['title'] = 'Data Grade';

		/** Mengambil data kelas */
		$data['grade'] = $this->m_grade->getgrade();
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/grade/v_grade');
		$this->load->view('admin/template_adm/v_footer');
	}
}