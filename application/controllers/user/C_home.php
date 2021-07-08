<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/m_home', 'home');
	}

    public function index()
	{
		$data['title'] = 'Hitung Kualitas Air';
		
		/** Mengambil data kelas */
		// $data['tds'] = $this->rule->gettds()->result();

		$this->load->view('user/v_home', $data);
	}

	public function hitung(){
		echo "aha";
	}

}
