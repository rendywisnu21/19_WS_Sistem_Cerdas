<?php
class C_admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');
		}

		$this->load->model('admin/m_admin', 'admin');
	}

    public function index()
	{
		$data['title'] = 'Data Admin';
		
		/** Mengambil data kelas */
		$data['admin'] = $this->admin->getadmin()->result();
		$this->load->view('admin/template_adm/v_header', $data);
		$this->load->view('admin/template_adm/v_navbar');
		$this->load->view('admin/template_adm/v_sidebar');
		$this->load->view('admin/admin/v_admin', $data);
		$this->load->view('admin/template_adm/v_footer');
	}
	
	public function tambah_aksi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[2]', [
			'required' => 'Kolom ini harus di isi',
            'minlength' => 'isian minimal 5 karakter',
			]);
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[2]', [
            'required' => 'Kolom ini harus di isi',
            'minlength' => 'isian minimal 5 karakter',
            ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]', [
            'required' => 'Kolom ini harus di isi',
            'minlength' => 'isian minimal 8 karakter',
            ]);

		if($this->form_validation->run() == false){
			$this->index();
		}

		$check = $this->admin->getadminlast()->num_rows();
		if ($check > 0) {
			$lastId = $this->admin->getadminlast()->result();
			foreach ($lastId as $row){
				$rawid = substr($row->id_admin, 2,3); //009
				$id = intval($rawid); //9

				if($id == 9){
					$id_admin = "AD0" . ($id + 1);
				}else {
					if (strlen($id) == 1) { //1
						$id_admin = "AD00" . ($id + 1); //AD0010
					}else if (strlen($id) == 2) {
						$id_admin = "AD0" . ($id + 1);
					}else if (strlen($id) == 3){
						$id_admin = "AD" . ($id + 1);
					}		
				}	
			}
		}else {
			$id_admin = "AD001";
		}

		$nama = htmlspecialchars($this->input->post('nama'));
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));
		
		if ($this->form_validation->run() == false) {
			$this->index();
		}else{
			$data = array(
				'id_admin' => $id_admin,
				'nama_admin' => $nama,
				'username_admin' => $username,
				'password_admin' => md5($password),
                'role' => '0'
			);
		
			$this->admin->tambah($data);
			$this->session->set_flashdata('message', 'save');
			redirect('admin/C_admin');
		}
	}

	public function hapus()
    {
        $id_admin = $this->input->post('delete_id', TRUE);
		$where = array(
            'id_admin' => $id_admin
        );
		$this->admin->hapus($where, 'tb_admin');
		$this->session->set_flashdata('message', 'dataDelete');
		redirect('admin/C_admin');
    }
}
