<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 02/10/2017
 * Time: 22:03
 */

class Cliente_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('*')->from('cliente')->order_by('cliente_id', "asc");
        return $this->db->get()->result_array();
    }

    public function get_by_id($id){
        $this->db->select('*')
            ->from('cliente')
            ->where('cliente_id', $id);
        return $this->db->get()->row_array();
    }

    public function gravar($dados, $id = null){
        if($id != null){
            $this->db->where('cliente_id', $id);
            $this->db->update('cliente', $dados);
        }else{
            $this->db->insert('cliente', $dados);
        }
    }
    public function remover($id){
        $this->db->where('cliente_id', $id);
        $this->db->delete('cliente');
    }

}