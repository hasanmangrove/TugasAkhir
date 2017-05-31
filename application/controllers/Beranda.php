<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * Login: Mangrove
 * Date: 22/05/2017
 * Time: 18.32
 */
class Beranda extends CI_Controller{

    function index(){
        $this->load->view('public/beranda');
    }

    function pertumbuhan(){
        $this->load->view('public/pertumbuhan');
    }

    function sekolah(){
        $this->load->view('public/sekolah');
    }

    function data(){
        $this->load->view('public/data');
    }

    function siswa(){
        $this->load->view('public/siswa');
    }

    function rombel(){
        $this->load->view('public/rombel');
    }

    function pegawai(){
        $this->load->view('public/pegawai');
    }

    function tentang(){
        $this->load->view('public/tentang');
    }

    function kontak(){
        $this->load->view('public/kontak');
    }

}
?>