<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Texto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Texto_model');
    }

    public function index(){
        $data = [
            'texto' => $this->Texto_model->get_all(),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/textos-lista', $data);
    }

    public function gravar(){
        $id = 1;
        $this->Texto_model->gravar($_POST, $id);
        echo 'Texto Alterado com Sucesso!';
    }

}