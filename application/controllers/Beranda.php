<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * Login: Mangrove
 * Date: 22/05/2017
 * Time: 18.32
 */
class Beranda extends CI_Controller{

    function __construct(){
        parent::__construct();

        $this->load->model('BerandaModel');
    }

    function index(){
        $this->load->view('public/beranda');
    }

    function pertumbuhan(){
        $this->load->view('public/pertumbuhan');
    }

    function sekolah(){
        $data['provinsi'] = $this->BerandaModel->provinsi();
        $this->load->view('public/sekolah', $data);
    }

    function ambil_data(){
        $id_provinsi = $this->input->post('id_provinsi');
        $kabupaten = $this->BerandaModel->kabupaten($id_provinsi);
        $data = "<option> value=''>--Pilih--</option>";
        foreach ($kabupaten as $i){
            $data .= "<option value='$i[id]'>$i[kabupaten]</option>\n";
        }
        echo $data;
    }

    function cari_sekolah(){
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

    function prestasi(){
        $this->load->view('public/prestasi');
    }

    function guru(){
        $this->load->view('public/guru');
    }

    function kepsek(){
        $this->load->view('public/kepsek');
    }

    function wakasek(){
        $this->load->view('public/wakasek');
    }

}
?>