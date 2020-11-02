<?php
class M_backend extends CI_Model{

    function get_user(){
        $data=$this->db->get('tb_user')->result();
        return $data;
    } 



}?>
