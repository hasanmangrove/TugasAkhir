<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * Login: Mangrove
 * Date: 22/05/2017
 * Time: 18.27
 */
class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!($this->session->userdata('level') === '1')) {
            if (!$this->session->userdata('username')){
                redirect('login');
            }
            redirect('login');
        }
        $this->load->model('AdminModel');
    }

    function index(){
        $this->load->view('admin/dashboard');
    }

    function user(){

        $this->load->view('admin/user');
    }

    function database(){
        $this->load->view('admin/database');
    }

    function pertumbuhan(){
        $this->load->view('admin/pertumbuhan');
    }

    function lihat_user(){
        $data['user'] = $this->AdminModel->lihat_user()->result();
        $this->load->view('admin/lihat_user', $data);
    }

    function tambahUser(){

    }

    function sekolah(){
        $this->load->view('admin/sekolah');
    }

    function peserta_didik(){
        $this->load->view('admin/peserta_didik');
    }

    function rombel(){
        $this->load->view('admin/rombel');
    }

    function pegawai(){
        $this->load->view('admin/pegawai');
    }

    function info(){
        $this->load->view('admin/info');
    }

    function profil(){
        $this->load->view('admin/profil');
    }

    function pengaturan(){
        $this->load->view('admin/pengaturan');
    }

    function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('npsn');
        $this->session->unset_userdata('Nama');
        session_destroy();
        redirect('');
    }
}
?>