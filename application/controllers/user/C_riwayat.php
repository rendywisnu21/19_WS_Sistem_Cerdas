<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_riwayat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/m_riwayat');
	}

    public function index()
	{
		$data['title'] = 'Riwayat Hasil Hitung';

		$data['hasil'] = $this->m_riwayat->getRiwayat()->result();

		$this->load->view('user/v_header', $data);
		$this->load->view('user/v_navbar');
		$this->load->view('user/v_sidebar');
		$this->load->view('user/v_riwayat');
		$this->load->view('user/v_footer');
	}

	public function hapus()
    {
        $id_riwayat = $this->input->post('delete_id', TRUE);
		$where = array(
            'id_riwayat' => $id_riwayat
        );
		$this->m_riwayat->hapus($where, 'tb_hasil');
		$this->session->set_flashdata('message', 'dataDelete');
		redirect('user/C_riwayat');
    }
}
