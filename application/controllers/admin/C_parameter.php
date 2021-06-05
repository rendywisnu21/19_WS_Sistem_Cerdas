<?php

class C_parameter extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/m_parameter');
    }

    public function index()
    {
        $data['title'] = 'Data Parameter';

        $data['parameter'] = $this->m_parameter->tampil_parameter();
        $this->load->view('admin/template_adm/v_header');
        $this->load->view('admin/template_adm/v_navbar');
        $this->load->view('admin/template_adm/v_sidebar');
        $this->load->view('admin/parameter/v_parameter', $data);
        $this->load->view('admin/template_adm/v_footer');
    }
}

?>