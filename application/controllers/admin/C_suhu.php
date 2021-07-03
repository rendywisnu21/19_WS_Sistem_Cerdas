<?php
class C_Suhu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');
		}

		$this->load->model('admin/m_suhu');
	}

    public function index()
	{
		$data['title'] = 'Data Suhu';

		/** Mengambil data kelas */
		$data['suhu'] = $this->m_suhu->getSuhu()->result();
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/suhu/v_suhu');
		$this->load->view('admin/template_adm/v_footer');
	}

	public function tambah()
	{
        $this->form_validation->set_rules('suhu', 'Suhu', 'required|trim|alpha|min_length[4]', [
            'required' 	=> 'Isi dengan nilai baik, sedang, buruk, atau sangat buruk',
			'alpha' 	=> 'Mohon isi dengan huruf tanpa angka maupun simbol',
			'min_length'=> 'Isikan minimal 4 huruf'
            ]);

        $this->form_validation->set_rules('domain', 'Domain', 'required|trim|numeric|min_length[2]', [
            'required' 	=> 'Isi dengan nilai baik, sedang, buruk, atau sangat buruk',
			'numeric' 	=> 'Mohon isi dengan angka',
			'min_length'=> 'Isikan minimal 2 huruf'
            ]);
		
		// Cek id_suhu
		$check = $this->m_suhu->getSuhu()->num_rows();
		if ($check > 0) {
			$lastId = $this->m_suhu->getSuhuLast()->result();
			foreach ($lastId as $row){
				$rawid = substr($row->id_suhu, 2);
				$id = intval($rawid);
				
				if (strlen($id) == 1) {
					$id_suhu = "SU0" . ($id + 1);
				}else if (strlen($id) == 2) {
					$id_suhu = "SU" . ($id + 1);
				}			
			}
		}else {
			$id_suhu = "SU01";
		}

		$suhu 	= htmlspecialchars($this->input->post('suhu'));
		$domain = htmlspecialchars($this->input->post('domain'));
		
		if ($this->form_validation->run() == false) {
			$this->index();
		}else{
			$data = array(
				'id_suhu'	=> $id_suhu,
				'suhu' 		=> $suhu,
				'domain' 	=> $domain,
			);
		
			$this->m_suhu->tambah($data);
			$this->session->set_flashdata('message', 'save');
			redirect('admin/C_suhu');
		}
	}

	public function hapus($id)
    {
        $this->m_suhu->hapus(['id_suhu' => $id], 'tb_suhu');
        redirect('admin/C_suhu');
    }
}
