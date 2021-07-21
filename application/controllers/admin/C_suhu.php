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

		$data['fuzzy_set'] = $this->m_suhu->getSuhu()->result();
		$data['nilai_fz']	= [
			'Excellent', 'Good', 'Bad', 'Very Bad'
		];
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/suhu/v_suhu');
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
		
		// Cek id_suhu SU010
		$check = $this->m_suhu->getSuhu()->num_rows();
		if ($check > 0) {
			$lastId = $this->m_suhu->getSuhuLast()->result();
			foreach ($lastId as $row){
				$rawid = substr($row->id_suhu, 2,3); //009
				$id = intval($rawid); //9

				if($id == 9){
					$id_suhu = "SU0" . ($id + 1);
				}else {
					if (strlen($id) == 1) { //1
						$id_suhu = "SU00" . ($id + 1); //AD0010
					}else if (strlen($id) == 2) {
						$id_suhu = "SU0" . ($id + 1);
					}else if (strlen($id) == 3){
						$id_suhu = "SU" . ($id + 1);
					}		
				}	
			}
		}else {
			$id_suhu = "SU001";
		}

		$fuzzy_set 	= htmlspecialchars($this->input->post('fuzzy_set'));
		$domain 	= htmlspecialchars($this->input->post('domain'));
		
		if ($this->form_validation->run() == false) {
			$this->index();
		}else{
			$data = array(
				'id_suhu'	=> $id_suhu,
				'fuzzy_set' => $fuzzy_set,
				'domain' 	=> $domain,
			);
		
			$this->m_suhu->tambah($data);
			$this->session->set_flashdata('message', 'save');
			redirect('admin/C_suhu');
		}
	}

	public function hapus()
    {
        $id_suhu = $this->input->post('delete_id', TRUE);
		$where = array(
            'id_suhu' => $id_suhu
        );
		$this->m_suhu->hapus($where, 'tb_suhu');
		$this->session->set_flashdata('message', 'dataDelete');
		redirect('admin/C_suhu');
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
		
		// Ambil Data dari tb_suhu
		$where 				= array('id_suhu' => $id);
		
		if ($this->form_validation->run() == false) {
			$this->index();
		}else{
			$nilai = array(
				'fuzzy_set' => $fuzzy_set,
				'domain' 	=> $domain
			);
		
			$this->m_suhu->edit($where, 'tb_suhu' ,$nilai);
			redirect('admin/C_suhu');
		}
	}
}
