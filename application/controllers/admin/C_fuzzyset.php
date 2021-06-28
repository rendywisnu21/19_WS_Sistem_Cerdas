<?php
class C_Fuzzyset extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');
		}
		
		$this->load->model('admin/m_fuzzyset');
	}

    public function index()
	{
		$data['title'] = 'Data Fuzzy Set';
		
		/** Mengambil data kelas */
		$data['fuzzyset'] = $this->m_fuzzyset->getfuzzyset()->result();
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/fuzzy/v_fuzzyset', $data);
		$this->load->view('admin/template_adm/v_footer');
	}
	
	public function tambahfzs()
	{
		$this->form_validation->set_rules('namafz', 'Namafz', 'trim|required', [
			'required' => 'Kolom ini harus di isi',
			]);
		$data['title'] = 'Tambah Data Fuzzy';
		$data['fuzzyset'] = $this->m_fuzzyset->getfuzzyset();

		$check = $this->m_fuzzyset->getfuzzyset()->num_rows();
		if ($check > 0) {
			$lastId = $this->m_fuzzyset->getfuzzysetlast()->result();
			foreach ($lastId as $row){
				$rawid_fuzzy = substr($row->id_fuzzyset, 3);
				$id_fuzzyInt = intval($rawid_fuzzy);
				
				if (strlen($id_fuzzyInt) == 1) {
					$id_fuzzyset = "FZ00" . ($id_fuzzyInt + 1);
				}else if (strlen($id_fuzzyInt) == 2) {
					$id_fuzzyset = "FZ0" . ($id_fuzzyInt + 1);
				}else if (strlen($id_fuzzyInt) == 3){
					$id_fuzzyset = "FZ" . ($id_fuzzyInt + 1);
				}			
			}
		}else {
			$id_fuzzyset = "FZ001";
		}

		// $id_fuzzyset = htmlspecialchars($this->input->post('id_fuzzyset'));
		$nama_fuzzyset = htmlspecialchars($this->input->post('namafz'));
		
		if ($this->form_validation->run() == false) {
			/** Mengambil data kelas */
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/fuzzy/v_tmbhfuzzyset', $data);
		$this->load->view('admin/template_adm/v_footer');
		}else{
			$data = $this->m_fuzzyset->getfuzzyset();
			// $nama_fuzzyset="Fuzzy";
		
			$fuzzy = array(
				'id_fuzzyset' => $id_fuzzyset,
				'nama_fuzzyset' => $nama_fuzzyset
			);
		
			$this->m_fuzzyset->tambahfzs($fuzzy);
			$this->session->set_flashdata('message', 'save');
			redirect('admin/C_fuzzyset/tambahfzs');
		}
	}
	function delete()
	{
		$id_fz = $this->input->post('delete_id', TRUE);
		$where = array(
            'id_fuzzyset' => $id_fz
        );
		$this->m_fuzzyset->delete($where, 'tb_fuzzyset');
		$this->session->set_flashdata('message', 'dataDelete');
		redirect('admin/C_fuzzyset');
	}
}