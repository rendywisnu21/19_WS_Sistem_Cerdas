<?php
class C_Fuzzyset extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_fuzzyset');
	}

    public function index()
	{
		$data['tittle'] = 'Data Fuzzy Set';

		/** Mengambil data kelas */
		$data['fuzzyset'] = $this->m_fuzzyset->getfuzzyset();
		$this->load->view('admin/template_adm/v_header');
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/fuzzy/v_fuzzyset', $data);
		$this->load->view('admin/template_adm/v_footer');
	}
}