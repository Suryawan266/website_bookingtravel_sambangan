<?php
defined('BASEPATH') OR exit('NO direct script accses allowed');
class Back_end extends CI_Controller{
    function  __construct() { 
        parent :: __construct();
        $this->load->model('M_backend');
    }
    function Home(){
        $data['title']="Tampilan Beranda";
        $data['meta']="suryawan";
        $data['beranda']="beranda";
    $this->load->view('backend/template_backend',$data);
}
function form_user(){
    $data['title']="form input data mahasiswa";
    $data['tb_user'] = $this->M_backend->get_user();
    $data['beranda']="backend/user/index";
$this->load->view('template_backend',$data);
} 


}?>