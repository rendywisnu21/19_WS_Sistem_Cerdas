<?php
class C_fuzzy extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');
		}

		$this->load->model('admin/m_fuzzy');
	}

	public function index()
	{
		$data['title'] = 'Data Fuzzyset';
		
		/** Mengambil data kelas */
		$data['fuzzyset'] = $this->m_fuzzy->getFuzzy()->result();
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/fuzzy/v_fuzzy', $data);
		$this->load->view('admin/template_adm/v_footer');
	}

	public function tambah()
	{
        $this->form_validation->set_rules('fuzzyset', 'Fuzzyset', 'required|trim|alpha|min_length[4]', [
            'required' 	=> 'Isi dengan nilai baik, sedang, buruk, atau sangat buruk',
			'alpha' 	=> 'Mohon isi dengan huruf tanpa angka maupun simbol',
			'min_length'=> 'Isikan minimal 4 huruf'
            ]);
		
		// Cek id_fuzzyset
		$check = $this->m_fuzzy->getFuzzy()->num_rows();
		if ($check > 0) {
			$lastId = $this->m_fuzzy->getFuzzyLast()->result();
			foreach ($lastId as $row){
				$rawid = substr($row->id_fuzzyset, 2);
				$id = intval($rawid);
				
				if (strlen($id) == 1) {
					$id_fuzzyset = "FZ0" . ($id + 1);
				}else if (strlen($id) == 2) {
					$id_fuzzyset = "FZ" . ($id + 1);
				}			
			}
		}else {
			$id_fuzzyset = "FZ01";
		}

		$fuzzyset = htmlspecialchars($this->input->post('fuzzyset'));
		
		if ($this->form_validation->run() == false) {
			$this->index();
		}else{
			$data = array(
				'id_fuzzyset' => $id_fuzzyset,
				'fuzzyset' => $fuzzyset
			);
		
			$this->m_fuzzy->tambah($data);
			$this->session->set_flashdata('message', 'save');
			redirect('admin/C_fuzzy');
		}
	}

	public function hapus($id)
    {
        $this->m_fuzzy->hapus(['id_fuzzyset' => $id], 'tb_fuzzyset');
        redirect('admin/C_fuzzy');
    }
}
