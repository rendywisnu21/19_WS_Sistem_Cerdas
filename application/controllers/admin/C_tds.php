<?php
class C_Tds extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');
		}
		
		$this->load->model('admin/m_tds');
	}

    public function index()
	{
		$data['title'] = 'Data TDS';
		
		/** Mengambil data kelas */
		$data['tds'] = $this->m_tds->gettds()->result();
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/tds/v_tds', $data);
		$this->load->view('admin/template_adm/v_footer');
	}
	
	public function tambahtds()
	{
		$this->form_validation->set_rules('namatd', 'Namatd', 'trim|required', [
			'required' => 'Kolom ini harus di isi',
			]);
		
		$this->form_validation->set_rules('domain', 'Domain', 'required|trim', [
			'required' 	=> 'Kolom ini perlu diisi'
			]);
			
		$data['tds'] = $this->m_tds->gettds();

		$check = $this->m_tds->gettds()->num_rows();
		if ($check > 0) {
			$lastId = $this->m_tds->gettdslast()->result();
			foreach ($lastId as $row){
				$rawid_tds = substr($row->id_tds, 2, 2);
				$id_tdsInt = intval($rawid_tds);
				
				if (strlen($id_tdsInt) == 1) {
					$id_tds = "TD" . ($id_tdsInt + 1);
				}else if (strlen($id_tdsInt) == 2) {
					$id_tds = "TD" . ($id_tdsInt + 1);
				}		
			}
		}else {
			$id_tds = "TD01";
		}

		// $id_fuzzyset = htmlspecialchars($this->input->post('id_fuzzyset'));
		$fuzzy_set = htmlspecialchars($this->input->post('namatd'));
		$domain = htmlspecialchars($this->input->post('domain'));
		
		if ($this->form_validation->run() == false) {
			/** Mengambil data kelas */
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/tds/v_tmbhtds', $data);
		$this->load->view('admin/template_adm/v_footer');
		}else{
			$data = $this->m_tds->gettds();
			// $nama_fuzzyset="Fuzzy";
		
			$fuzzy = array(
				'id_tds' => $id_tds,
				'fuzzy_set' => $fuzzy_set,
				'domain' => $domain
			);
		
			$this->m_tds->tambahtds($fuzzy, 'tb_tds');
			$this->session->set_flashdata('message', 'save');
			redirect('admin/C_tds');
		}
	}
	
	function delete()
	{
		$id_td = $this->input->post('delete_id', TRUE);
		$where = array(
            'id_tds' => $id_td
        );
		$this->m_tds->delete($where, 'tb_tds');
		$this->session->set_flashdata('message', 'dataDelete');
		redirect('admin/C_tds');
	}
}
