<?php
/**
 * Created by PhpStorm.
 * User: orlando
 * Date: 02/10/2017
 * Time: 22:03
 */

class Texto_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all(){
        $this->db->select('*')->from('texto');
        return $this->db->get()->row_array();
    }

    public function gravar($dados, $id = null){
        if($id != null){
            $this->db->where('texto_id', $id);
            $this->db->update('texto', $dados);
        }
    }

}