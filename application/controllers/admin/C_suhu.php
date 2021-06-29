<?php
class C_Suhu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_suhu');
	}

    public function index()
	{
		$data['title'] = 'Data Suhu';

		/** Mengambil data kelas */
		$data['suhu'] = $this->m_suhu->getSuhu();
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/suhu/v_suhu');
		$this->load->view('admin/template_adm/v_footer');
	}

	public function tambah()
    {
		$data['title'] = 'Form Tambah Data Mahasiswa';

        $this->form_validation->set_rules('suhu', 'Suhu', 'required', [
            'required' => 'Field suhu harus diisi!'
        ]);
        $this->form_validation->set_rules('domain', 'Domain', 'required|numeric', [
            'required' => 'Field domain harus diisi!',
            'numeric' => 'Field domain harus diisi dengan angka!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/template_adm/v_header', $data);
			$this->load->view('admin/template_adm/v_navbar');
			$this->load->view('admin/template_adm/v_sidebar');
			$this->load->view('admin/suhu/v_tambahsuhu');
			$this->load->view('admin/template_adm/v_footer');
        } else {
			$suhu = $this->input->post('suhu');
            $domain = $this->input->post('domain');
            $data = [
                'suhu'		=> $suhu,
                'domain' 	=> $domain
            ];

            $this->m_suhu->tambahDataSuhu('tb_suhu', $data);
            $this->session->set_flashdata('flashtambah', 'ditambahkan!');
            redirect('admin/C_suhu');
        }
    }
}
