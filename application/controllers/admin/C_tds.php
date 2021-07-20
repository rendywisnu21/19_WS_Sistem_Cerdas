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
		$data['fuzzy_set'] = $this->m_tds->getTDS()->result();
		$data['nilai_fz']	= [
			'Excellent', 'Good', 'Bad', 'Very Bad'
		];
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/tds/v_tds', $data);
		$this->load->view('admin/template_adm/v_footer');
	}
	
	public function tambah()
	{
		$this->form_validation->set_rules('fuzzy_set', 'Fuzzy Set', 'required|trim', [
            'required' 	=> 'Kolom ini perlu dipilih'
            ]);

        $this->form_validation->set_rules('domain', 'Domain', 'required|trim', [
            'required' 	=> 'Kolom ini perlu diisi'
            ]);
		
		// Cek id_tds
		$check = $this->m_tds->getTDS()->num_rows();
		if ($check > 0) {
			$lastId = $this->m_tds->getTDSLast()->result();
			foreach ($lastId as $row){
				$rawid = substr($row->id_tds, 2,3); //009
				$id = intval($rawid); //9

				if($id == 9){
					$id_tds = "TD0" . ($id + 1);
				}else {
					if (strlen($id) == 1) { //1
						$id_tds = "TD00" . ($id + 1); //TD010
					}else if (strlen($id) == 2) {
						$id_tds = "TD0" . ($id + 1);
					}else if (strlen($id) == 3){
						$id_tds = "TD" . ($id + 1);
					}		
				}	
			}
		}else {
			$id_tds = "TD001";
		}

		$fuzzy_set 	= htmlspecialchars($this->input->post('fuzzy_set'));
		$domain 	= htmlspecialchars($this->input->post('domain'));
		
		if ($this->form_validation->run() == false) {
			$this->index();
		}else {
			$data = array(
				'id_tds'	=> $id_tds,
				'fuzzy_set' => $fuzzy_set,
				'domain' 	=> $domain,
			);
		
			$this->m_tds->tambah($data);
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

	public function edit($id)
	{	
		// Peraturan isi form
		$this->form_validation->set_rules('fuzzy_set', 'Fuzzy Set', 'required|trim', [
            'required' 	=> 'Kolom ini perlu dipilih'
            ]);

        $this->form_validation->set_rules('domain', 'Domain', 'required|trim', [
            'required' 	=> 'Kolom ini perlu diisi'
            ]);
			
		$fuzzy_set 	= htmlspecialchars($this->input->post('fuzzy_set'));
		$domain 	= htmlspecialchars($this->input->post('domain'));
		
		// Ambil Data dari tb_tds
		$where	=	array('id_tds' => $id);
		
		if ($this->form_validation->run() == false) {
			$this->index();
		}else{
			$nilai = array(
				'fuzzy_set' => $fuzzy_set,
				'domain' 	=> $domain
			);
		
			$this->m_tds->edit($where, 'tb_tds' ,$nilai);
			redirect('admin/C_tds');
		}
	}
}
