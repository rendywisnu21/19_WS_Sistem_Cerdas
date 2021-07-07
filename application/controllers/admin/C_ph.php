<?php
class C_ph extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');
		}

		$this->load->model('admin/m_ph');
	}

    public function index()
	{
		$data['title'] = 'Data Ph';

		/** Mengambil data kelas */
		$data['fuzzy_set'] = $this->m_ph->getPh()->result();
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/ph/v_ph');
		$this->load->view('admin/template_adm/v_footer');
	}

	public function tambah()
	{
        $this->form_validation->set_rules('fuzzy_set', 'Fuzzy Set', 'required|trim', [
            'required' 	=> 'Kolom ini perlu dipilih'
            ]);

        $this->form_validation->set_rules('domain', 'Domain', 'required|trim|min_length[2]', [
            'required' 	=> 'Kolom ini perlu diisi',
			'min_length'=> 'Isikan minimal 2 huruf'
            ]);
		
		// Cek id_ph
		$check = $this->m_ph->getPh()->num_rows();
		if ($check > 0) {
			$lastId = $this->m_ph->getPhLast()->result();
			foreach ($lastId as $row){
				$rawid = substr($row->id_ph, 2,3); //009
				$id = intval($rawid); //9

				if($id == 9){
					$id_ph = "PH0" . ($id + 1);
				}else {
					if (strlen($id) == 1) { //1
						$id_ph = "PH00" . ($id + 1); //PH010
					}else if (strlen($id) == 2) {
						$id_ph = "PH0" . ($id + 1);
					}else if (strlen($id) == 3){
						$id_ph = "PH" . ($id + 1);
					}		
				}	
			}
		}else {
			$id_ph = "PH001";
		}

		$fuzzy_set 	= htmlspecialchars($this->input->post('fuzzy_set'));
		$domain 	= htmlspecialchars($this->input->post('domain'));
		
		if ($this->form_validation->run() == false) {
			$this->index();
		}else{
			$data = array(
				'id_ph'		=> $id_ph,
				'fuzzy_set' => $fuzzy_set,
				'domain' 	=> $domain,
			);
		
			$this->m_ph->tambah($data);
			$this->session->set_flashdata('message', 'save');
			redirect('admin/C_ph');
		}
	}

	public function hapus()
    {
        $id_ph = $this->input->post('delete_id', TRUE);
		$where = array(
            'id_ph' => $id_ph
        );
		$this->m_ph->hapus($where, 'tb_ph');
		$this->session->set_flashdata('message', 'dataDelete');
		redirect('admin/C_ph');
    }
}
