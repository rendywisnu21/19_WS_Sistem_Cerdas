<?php
class C_auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_auth', 'auth');
	}

    public function index()
	{
		$this->load->view('admin/v_auth');
	}

	public function login()
	{
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'username_admin' => $username,
            'password_admin' => md5($password)
        );

        $auth = $this->auth->get_data($data)->row();
        
        if($auth != ''){
                $id = $auth->id_admin; 
                $nama = $auth->nama_admin;

            $this->session->set_userdata(array(
                'auth' => 'login',
                'id_admin' => $id,
                'nama_admin' => $nama
            ));
            redirect();
        }else{
            $this->session->set_userdata('gagal','gagal');
            $this->index();
        }
    }

    public function logout()
	{
        $this->session->sess_destroy();
        $this->session->set_userdata('logout','logout');
        redirect('admin/C_auth');
    }
}