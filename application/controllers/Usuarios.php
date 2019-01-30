<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 25/11/2017
 * Time: 11:03
 */

class Usuarios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_session();
        $this->load->model('Usuarios_model');
    }

    public function index(){
        $data = [
            'usuarios' => $this->Usuarios_model->get_all(),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/usuarios-lista', $data);
    }

    public function novo(){
        $data = [
            "config" => $this->Config_model->get_all()
        ];
        $this->load->view('admin/usuarios-novo', $data);
    }

    public function editar(){
        $id = get_param(1);
        $data = [
            'usuario' => $this->Usuarios_model->get_by_id($id),
            'config' => $this->Config_model->get_all()
        ];
        $this->load->view('admin/usuarios-editar', $data);
    }

    public function gravar(){
        if(isset($_POST['usuario_senha']) && !empty($_POST['usuario_senha'])){
            $_POST['usuario_senha'] = md5($_POST['usuario_senha']);
        }
        if(empty($_POST['usuario_senha'])){
            unset ($_POST['usuario_senha']);
        }
        if(isset($_POST['usuario_id'])){
            $id = $_POST['usuario_id'];
            $this->Usuarios_model->gravar($_POST, $id);
            $this->session->set_flashdata('true', 'Usuário Alterado com Sucesso!');
        }else{
            $this->Usuarios_model->gravar($_POST);
            $this->session->set_flashdata('true', 'Usuário Adicionado com Sucesso!');
        }
        redirect('usuarios');
    }

    public function remover(){
        $id = $_POST['id'];
        if($id != $_SESSION['__USUARIO_LOGADO__']['usuario_id']){
            $this->Usuarios_model->remover($id);
            echo true;
        }else{
            echo false;
        }
    }

    public function checa_email(){
        $email = $_POST['email'];
        echo $this->Usuarios_model->checa_email($email);
    }
}