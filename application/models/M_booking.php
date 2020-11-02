<?php
class M_booking extends CI_Model{


   
    function kirim_data_register($post){
        $data = array(
            'nama'=>$post['nama'],
            'password'=>$post['password'],
            'nama_lengkap'=>$post['nama_lengkap'],
            'no_hp'=>$post['no_hp'],
            'alamat'=>$post['alamat'],
            'email'=>$post['email'],
        );   
        $this->db->insert('tb_user',$data);
    }
}?>