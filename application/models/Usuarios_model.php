<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 02/10/2017
 * Time: 22:03
 */

class Usuarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($email, $senha){
        $this->db->select('*')
            ->from('usuarios')
            ->where('usuario_email' , $email)
            ->where('usuario_senha' , $senha);
        return $this->db->get()->row_array();
    }

    public function get_all(){
        $this->db->select('*')->from('usuarios')->order_by("usuario_id", "asc");
        return $this->db->get()->result_array();
    }

    public function get_by_id($id){
        $this->db->select('*')
            ->from('usuarios')
            ->where('usuario_id', $id);
        return $this->db->get()->row_array();
    }

    public function gravar($dados, $id = null){
        if($id != null){
            $this->db->where('usuario_id', $id);
            $this->db->update('usuarios', $dados);
        }else{
            $this->db->insert('usuarios', $dados);
        }
    }
    public function remover($id){
        $this->db->where('usuario_id', $id);
        $this->db->delete('usuarios');
    }

    public function checa_email($email){
        $this->db->select('*')
        ->from('usuarios')
        ->where('usuario_email', $email);
        return $this->db->get()->row_array() != '' ? true : false;
    }
}