<?php

class C_parameter extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        if(!isset($_SESSION['auth'])){
			redirect('admin/C_auth');
		}
        
        $this->load->model('admin/m_parameter');
    }

    public function index()
    {
        $data['title'] = 'Data Parameter';

        $data['parameter'] = $this->m_parameter->tampil_parameter()->result();
        $this->load->view('admin/template_adm/v_header', $data);
        $this->load->view('admin/template_adm/v_navbar');
        $this->load->view('admin/template_adm/v_sidebar');
        $this->load->view('admin/parameter/v_parameter');
        $this->load->view('admin/template_adm/v_footer');
    }

    public function tambah_pm()
    {
        $this->form_validation->set_rules('namapm', 'Namapm', 'trim|required', [
            'required' => 'Kolom harus di isi',
        ]);
        $data['title'] = 'Tambah Data Parameter';
        $data['parameter'] = $this->m_parameter->tampil_parameter()->result();

        $check = $this->m_parameter->tampil_parameter()->num_rows();
		if ($check > 0) {
			$lastId = $this->m_parameter->getparametersetlast()->result();
			foreach ($lastId as $row){
				$rawid_parameter = substr($row->id_parameter, 3);
				$id_parameterInt = intval($rawid_parameter);
				
				if (strlen($id_parameterInt) == 1) {
					$id_parameter = "PM00" . ($id_parameterInt + 1);
				}else if (strlen($id_parameterInt) == 2) {
					$id_parameter = "PM0" . ($id_parameterInt + 1);
				}else if (strlen($id_fuzzyInt) == 3){
					$id_parameter = "PM" . ($id_parameterInt + 1);
				}			
			}
        }else {
            $id_parameter = "PM001";
        }

        $nama_parameter = htmlspecialchars($this->input->post('namapm'));

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/template_adm/v_header', $data);
            $this->load->view('admin/template_adm/v_navbar');
            $this->load->view('admin/template_adm/v_sidebar');
            $this->load->view('admin/parameter/v_tambahpm', $data);
            $this->load->view('admin/template_adm/v_footer');  
        } else {
            $data = $this->m_parameter->tampil_parameter();

            $parameter =array
            (
                'id_parameter' => $id_parameter,
                'nama_parameter' => $nama_parameter
            );

            $this->m_parameter->tambah_parameter($parameter);
            $this->session->set_flashdata('message', 'save');
            redirect('admin/C_parameter/index');
        } 
    }

    public function hapus_pm()
    {
        $id_parameter = $this->input->post('delete_id', TRUE);
        $where = array (
            'id_parameter' => $id_parameter
        );

        $this->m_parameter->delete_pm($where, 'tb_parameter');
        $this->session->set_flashdata('message', 'dataDelete');
        redirect('admin/C_parameter/index');
    }
}

?>