<?php
class C_hasil extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');
		}

		$this->load->model('admin/M_hasil', 'hasil');
	}

    public function index()
	{
		$data['title'] = 'Data Riwayat Hasil';

		// Mengambil data hasil
		$data['hasil'] = $this->hasil->getHasil()->result();
		
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/hasil/v_hasil');
		$this->load->view('admin/template_adm/v_footer');
	}

	public function hapus()
    {
        $id_hasil = $this->input->post('delete_id', TRUE);
		$where = array(
            'id_hasil' => $id_hasil
        );
		$this->hasil->hapus($where, 'tb_hasil');
		$this->session->set_flashdata('message', 'dataDelete');
		redirect('admin/C_hasil');
    }

	public function clear()
    {
		$hasil = $this->hasil->getHasil()->result();
		foreach ($hasil as $h){
			$id_hasil = $h->id_hasil;
			$where = array(
				'id_hasil' => $id_hasil
			);
			$this->hasil->hapus($where, 'tb_hasil');
		}
		
		$this->session->set_flashdata('message', 'dataDelete');
		redirect('admin/C_hasil');
    }
}
