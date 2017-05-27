<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * Login: Mangrove
 * Date: 22/05/2017
 * Time: 18.30
 */
class Petugas extends CI_Controller{

    function __construct() {
        parent::__construct();
        if (!($this->session->userdata('level') === '0')) {
            if (!$this->session->userdata('username')){
                redirect('login');
            }
            redirect('login');
        }
        $this->load->model('PetugasModel');
    }

    function index(){
        $this->load->view('petugas/dashboard');
    }

    function profil_sekolah(){
        $where = array('npsn' => $this->session->userdata('npsn'));
        $data['profil'] = $this->PetugasModel->profilSekolah($where)->result();
        $data['kabupaten'] = $this->PetugasModel->lihat_kabupaten()->result();
        $data['kecamatan'] = $this->PetugasModel->lihat_kecamatan()->result();
        $this->load->view('petugas/profil_sekolah', $data);
    }

    function bangunan(){
        $where = array('npsn' => $this->session->userdata('npsn'));
        $data['aset_bangunan'] = $this->PetugasModel->asetBangunan($where)->result();
        $data['profil'] = $this->PetugasModel->profilSekolah($where)->result();
        $this->load->view('petugas/bangunan', $data);
    }

    function tanah(){
        $this->load->view('petugas/tanah');
    }

    function jurusan(){
        $this->load->view('petugas/jurusan');
    }

    function siswa(){
        $this->load->view('petugas/siswa');
    }

    function sarana(){
        $this->load->view('petugas/sarana');
    }

    function struktur(){
        $this->load->view('petugas/struktur');
    }

    function kepsek(){
        $this->load->view('petugas/kepsek');
    }

    function wakasek(){
        $this->load->view('petugas/wakasek');
    }

    function guru(){
        $this->load->view('petugas/guru');
    }

    function tenaga_pendidikan(){
        $this->load->view('petugas/tenaga_pendidikan');
    }

    function prestasi(){
        $this->load->view('petugas/prestasi');
    }

    function tambah_prestasi(){
        $this->load->view('petugas/tambah_prestasi');
    }

    function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('Nama');
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('npsn');
        session_destroy();
        redirect('');
    }
}
?>