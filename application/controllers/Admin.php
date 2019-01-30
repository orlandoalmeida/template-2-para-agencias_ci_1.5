<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
    }

    public function index(){
        $data = [
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/index', $data);
    }

}