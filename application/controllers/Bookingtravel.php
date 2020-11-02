<?php
defined('BASEPATH') OR exit('NO direct script accses allowed');
class Bookingtravel extends CI_Controller{
    function  __construct() { 
        parent :: __construct();
        $this->load->model('M_booking');
    }
    function Home(){
        $data['content']='template';
        $this->load->view('template');
    } 
    function Gallery(){
        $data['content']='gallery_details';
        $this->load->view('gallery_details');
    } 
    function form_register(){
        $data['title']="form input data mahasiswa";
        $data['beranda']="register";
    $this->load->view('register',$data);
    } 
    function kirim_data_register(){
        //mengirim post ke model
        $this->M_booking->kirim_data_register($_POST);
        //akses fungsi untuk menampilkan halaman daftar peserta
        redirect('Bookingtravel/form_register');
    }



}?>