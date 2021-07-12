<?php
class C_rule extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');
		}

		$this->load->model('admin/m_rule', 'rule');
	}

    public function index()
	{
		$data['title'] = 'Data Rule';
		
		/** Mengambil data kelas */
		$data['rule'] = $this->rule->getrule()->result();
		$data['suhu'] = $this->rule->getsuhu()->result();
		$data['ph'] = $this->rule->getph()->result();
		$data['tds'] = $this->rule->gettds()->result();

		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/rule/v_rule', $data);
		$this->load->view('admin/template_adm/v_footer');
	}
	
	public function tambah_aksi()
	{
		$this->form_validation->set_rules('rule', 'rule', 'required', [
			'required' => 'Kolom ini harus di isi',
			]);
		$this->form_validation->set_rules('suhu', 'suhu', 'required', [
			'required' => 'Kolom ini harus di isi',
			]);
        $this->form_validation->set_rules('ph', 'ph', 'required', [
            'required' => 'Kolom ini harus di isi'
            ]);
        $this->form_validation->set_rules('tds', 'tds', 'required', [
            'required' => 'Kolom ini harus di isi'
            ]);
		$this->form_validation->set_rules('grade', 'grade', 'required', [
			'required' => 'Kolom ini harus di isi'
			]);
		
		if($this->form_validation->run() == false){
			$this->index();
		}

		$rule = 'R'.$this->input->post('rule');
		$suhu = $this->input->post('suhu');
		$ph = $this->input->post('ph');
		$tds = $this->input->post('tds');
		$grade = htmlspecialchars($this->input->post('grade'));
		
		if ($this->form_validation->run() == false) { 
			$this->index();
		}else{
			$data = array(
				'rule' => $rule,
				'id_suhu' => $suhu,
				'id_ph' => $ph,
				'id_tds' => $tds,
				'grade' => $grade
			);
		
			$this->rule->tambah($data);
			$this->session->set_flashdata('message', 'tambah_sukses');
			redirect('admin/C_rule');
		}
	}


	public function hapus()
    {
        $id_rule = $this->input->post('delete_id', TRUE);
		$where = array(
            'id_rule' => $id_rule
        );
		$this->rule->hapus($where, 'tb_rule');
		$this->session->set_flashdata('message', 'hapus_sukses');
		redirect('admin/C_rule');
    }
}
