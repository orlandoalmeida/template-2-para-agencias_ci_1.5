<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Cliente extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Cliente_model');
    }

    public function index(){
        $data = [
            'cliente' => $this->Cliente_model->get_all(),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/cliente-lista', $data);
    }

    public function novo(){
        $data = [
            "config" => $this->Config_model->get_all()
        ];
        $this->load->view('admin/cliente-novo', $data);
    }

    public function editar(){
        $id = get_param(1);
        $data = [
            'cliente' => $this->Cliente_model->get_by_id($id),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/cliente-editar', $data);
    }

    public function gravar(){

        $image_path = 'img/cliente/';

        if($_FILES['cliente_img']['name'] != ''){
            $this->load->helper('upload');
            $config_icon = upload_file($image_path, 'cliente_img');
            $_POST['cliente_img'] = $image_path.$config_icon;
        }

        if(isset($_POST['cliente_descricao']) && !empty($_POST['cliente_descricao'])){
            $_POST['cliente_descricao'] = remove_spaces($_POST['cliente_descricao']);
        }

        if(isset($_POST['cliente_id'])){
            $id = $_POST['cliente_id'];
            $this->Cliente_model->gravar($_POST, $id);
            $this->session->set_flashdata('true', 'cliente Alterado com Sucesso!');
        }else{
            $this->Cliente_model->gravar($_POST);
            $this->session->set_flashdata('true', 'cliente Adicionado com Sucesso!');
        }
        redirect('cliente/');
    }

    public function remover(){
        $id = $_POST['id'];
        $this->Cliente_model->remover($id);
        echo true;
    }

}