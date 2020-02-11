<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index()
    {
        // $data = array(
        //     'nama'=> 'alendra',
        //     'status' => 'Pelajar',
        //     'jurusan' => 'komputer jaringan'
        // );
        $data['nama'] = 'muhammad alendra';
        $data['status'] = 'pelajar';
        $data['jurusan'] = 'TKJ';
        $this->header();
        $this->load->view('index',$data);
        $this->footer();
    }
    public function halamanprofil()
    {
        echo "Halaman Profil";
    }
    public function controllercontact($value='')
    {
        echo "Halaman Contact";
    }
    public function Nama($value='',$value1='')
    {
     echo "Nama Saya ".$value. " dan Nama kecil Saya ".$value1;    
    }
    /// ---- views ------------
    public function header()
    {
        $this->load->view('header');
    }
    public function footer($value='')
    {
        $this->load->view('footer');
    }
}