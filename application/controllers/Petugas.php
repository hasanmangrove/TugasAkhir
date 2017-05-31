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
        $where = array('npsn' => $this->session->userdata('npsn'));
        $data['profil'] = $this->PetugasModel->profilSekolah($where)->result();
        $data['aset_tanah'] = $this->PetugasModel->asetTanah($where)->result();
        $this->load->view('petugas/tanah', $data);
    }

    function jurusan(){
        $where = array('npsn' => $this->session->userdata('npsn'));
        $data['profil'] = $this->PetugasModel->profilSekolah($where)->result();
        $data['jurusan'] = $this->PetugasModel->jurusan($where)->result();
        $this->load->view('petugas/jurusan', $data);
    }

    function siswa(){
        $where = array('npsn' => $this->session->userdata('npsn'));
        $data['profil'] = $this->PetugasModel->profilSekolah($where)->result();
        $data['siswa'] = $this->PetugasModel->siswa($where)->result();
        $this->load->view('petugas/siswa', $data);
    }

    function sarana(){
        $where = array('npsn' => $this->session->userdata('npsn'));
        $data['profil'] = $this->PetugasModel->profilSekolah($where)->result();
        $data['sarana'] = $this->PetugasModel->sarana($where)->result();
        $this->load->view('petugas/sarana', $data);
    }

    function struktur(){
        $where = array('npsn' => $this->session->userdata('npsn'));
        $data['profil'] = $this->PetugasModel->profilSekolah($where)->result();
        $this->load->view('petugas/struktur', $data);
    }

    function kepsek(){
        $where = array('npsn' => $this->session->userdata('npsn'));
        $data['profil'] = $this->PetugasModel->profilSekolah($where)->result();
        $data['kepsek'] = $this->PetugasModel->kepsek($where)->result();
        $this->load->view('petugas/kepsek', $data);
    }

    function wakasek(){
        $where = array('npsn' => $this->session->userdata('npsn'));
        $data['profil'] = $this->PetugasModel->profilSekolah($where)->result();
        $data['wakasek'] = $this->PetugasModel->wakasek($where)->result();
        $this->load->view('petugas/wakasek', $data);
    }

    function guru(){
        $where = array('npsn' => $this->session->userdata('npsn'));
        $data['profil'] = $this->PetugasModel->profilSekolah($where)->result();
        $data['guru'] = $this->PetugasModel->guru($where)->result();
        $this->load->view('petugas/guru', $data);
    }

    function tenaga_pendidikan(){
        $where = array('npsn' => $this->session->userdata('npsn'));
        $data['profil'] = $this->PetugasModel->profilSekolah($where)->result();
        $data['tenaga_pendidikan'] = $this->PetugasModel->tenagaPendidikan($where)->result();
        $this->load->view('petugas/tenaga_pendidikan', $data);
    }

    function prestasi(){
        $where = array('npsn' => $this->session->userdata('npsn'));
        $data['profil'] = $this->PetugasModel->profilSekolah($where)->result();
        $data['prestasi'] = $this->PetugasModel->prestasi($where)->result();
        $this->load->view('petugas/prestasi', $data);
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