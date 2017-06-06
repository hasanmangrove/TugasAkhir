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
        $this->load->helper("url");
        $this->load->model('BerandaModel');
    }

    function index(){
        $data['jumlahSekolah'] = $this->BerandaModel->getJumlahSekolah();
        $data['jumlahGuru'] = $this->BerandaModel->getJumlahGuru();
        $data['jumlahTenagaPen'] = $this->BerandaModel->getJumlahTenagaPen();
        $data['jumlahKMS'] = $this->BerandaModel->getJumlahKMS();
        $data['jumlahSiswa'] = $this->BerandaModel->getJumlahSiswa();
        $data['jumlahPrestasi'] = $this->BerandaModel->getJumlahPrestasi();
        $this->load->view('public/beranda', $data);
    }

    function pertumbuhan(){
        $this->load->view('public/pertumbuhan');
    }

    function sekolah(){
        $data['sekolah'] = array();
        if($this->input->post('submit') === ''){
            if($this->input->post('kec') !== '0'){
                $data['provinsi'] = $this->BerandaModel->provinsi();
                $data['sekolah'] = $this->BerandaModel->sekolahByKec($this->input->post('kec'));
                $this->load->view('public/data_pokok/sekolah/sekolah_kec', $data);
            } elseif ($this->input->post('kab') !== '0') {
                $data['provinsi'] = $this->BerandaModel->provinsi();
                $kec = $this->BerandaModel->kecamatan($this->input->post('kab'));
                $temp = array();
                foreach ($kec as $i){
                    $temp[] = array(
                        'kecamatan' => $i['nama_kec'],
                        'jenjang' => array(
                            'SD'    => $this->BerandaModel->getSekolahKec('SD', $i['kode_kec']),
                            'MI'    => $this->BerandaModel->getSekolahKec('MI', $i['kode_kec']),
                            'SMP'   => $this->BerandaModel->getSekolahKec('SMP', $i['kode_kec']),
                            'MTS'   => $this->BerandaModel->getSekolahKec('MTS', $i['kode_kec']),
                            'SMA'   => $this->BerandaModel->getSekolahKec('SMA', $i['kode_kec']),
                            'SMK'   => $this->BerandaModel->getSekolahKec('SMK', $i['kode_kec']),
                            'MA'    => $this->BerandaModel->getSekolahKec('MA', $i['kode_kec']),
                            'SLB'   => $this->BerandaModel->getSekolahKec('SLB', $i['kode_kec'])
                        )
                    );
                }
                $data['sekolah'] = $temp;
                $this->load->view('public/data_pokok/sekolah/sekolah_kab', $data);
            } elseif ($this->input->post('prov') !== '0') {
                $data['provinsi'] = $this->BerandaModel->provinsi();
                $kab = $this->BerandaModel->kabupaten($this->input->post('prov'));
                $temp = array();
                foreach ($kab as $i){
                    $temp[] = array(
                        'kabupaten' => $i['kabupaten'],
                        'jenjang' => array(
                            'SD'    => $this->BerandaModel->getSekolahKab('SD', $i['id']),
                            'MI'    => $this->BerandaModel->getSekolahKab('MI', $i['id']),
                            'SMP'   => $this->BerandaModel->getSekolahKab('SMP', $i['id']),
                            'MTS'   => $this->BerandaModel->getSekolahKab('MTS', $i['id']),
                            'SMA'   => $this->BerandaModel->getSekolahKab('SMA', $i['id']),
                            'SMK'   => $this->BerandaModel->getSekolahKab('SMK', $i['id']),
                            'MA'    => $this->BerandaModel->getSekolahKab('MA', $i['id']),
                            'SLB'   => $this->BerandaModel->getSekolahKab('SLB', $i['id'])
                        )
                    );
                }
                $data['sekolah'] = $temp;
                $this->load->view('public/data_pokok/sekolah/sekolah_prov', $data);
            }
        } else {
            $data['provinsi'] = $this->BerandaModel->provinsi();
            $prov = $this->BerandaModel->provinsi();
            $temp = array();
            foreach ($prov as $i) {
                $temp[] = array(
                    'provinsi' => $i['nama'],
                    'jenjang' => array(
                        'SD' => $this->BerandaModel->getSekolahProv('SD', $i['id_provinsi']),
                        'MI' => $this->BerandaModel->getSekolahProv('MI', $i['id_provinsi']),
                        'SMP' => $this->BerandaModel->getSekolahProv('SMP', $i['id_provinsi']),
                        'MTS' => $this->BerandaModel->getSekolahProv('MTS', $i['id_provinsi']),
                        'SMA' => $this->BerandaModel->getSekolahProv('SMA', $i['id_provinsi']),
                        'SMK' => $this->BerandaModel->getSekolahProv('SMK', $i['id_provinsi']),
                        'MA' => $this->BerandaModel->getSekolahProv('MA', $i['id_provinsi']),
                        'SLB' => $this->BerandaModel->getSekolahProv('SLB', $i['id_provinsi'])
                    )
                );
            }
            $data['sekolah'] = $temp;
            $this->load->view('public/data_pokok/sekolah/sekolah_default', $data);
        }
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

    function data(){
        $this->load->view('public/data');
    }

    function siswa(){
        if($this->input->post('submit') === ''){
            if($this->input->post('kaec' !== '0')){

            } elseif ($this->input->post('kab') !== '0'){
                echo 'was here';
                $data['provinsi'] = $this->BerandaModel->provinsi();
                $kec = $this->BerandaModel->kecamatan($this->input->post('kab'));
                $temp = array();
                foreach ($kec as $i){
                    $temp[] = array(
                        'kode_kec' => $i['kode_kec'],
                        'nama_kec' => $i['nama_kec'],
                        'jumlah_putra' => $this->BerandaModel->jumlahSiswaKec('jumlah_putra', $i['kode_kec']),
                        'jumlah_putri' => $this->BerandaModel->jumlahSiswaKec('jumlah_putri', $i['kode_kec']),
                        'kms' => $this->BerandaModel->jumlahSiswaKec('kms', $i['kode_kec']),
                        'non_kms' => $this->BerandaModel->jumlahSiswaKec('non_kms', $i['kode_kec']),
                        'jumlah_siswa' => $this->BerandaModel->jumlahSiswaKec('jumlah_siswa', $i['kode_kec']),
                    );
                }
                $data['siswa'] = $temp;
                $this->load->view('public/data_pokok/siswa/siswa_kab', $data);
            }elseif ($this->input->post('prov') !== '0'){
                $data['provinsi'] = $this->BerandaModel->provinsi();
                $kab = $this->BerandaModel->kabupaten($this->input->post('prov'));
                $temp = array();
                foreach ($kab as $i){
                    $temp[] = array(
                        'id' => $i['id'],
                        'kabupaten' => $i['kabupaten'],
                        'jumlah_putra' => $this->BerandaModel->jumlahSiswaKab('jumlah_putra', $i['id']),
                        'jumlah_putri' => $this->BerandaModel->jumlahSiswaKab('jumlah_putri', $i['id']),
                        'kms' => $this->BerandaModel->jumlahSiswaKab('kms', $i['id']),
                        'non_kms' => $this->BerandaModel->jumlahSiswaKab('non_kms', $i['id']),
                        'jumlah_siswa' => $this->BerandaModel->jumlahSiswaKab('jumlah_siswa', $i['id']),
                    );
                }
                $data['siswa'] = $temp;
                $this->load->view('public/data_pokok/siswa/siswa_prov', $data);
            }
        }
        $data['provinsi'] = $this->BerandaModel->provinsi();
        $provinsi = $this->BerandaModel->provinsi();
        foreach ($provinsi as $i){
            $temp[] = array(
                'id_provinsi' => $i['id_provinsi'],
                'nama' => $i['nama'],
                'jumlah_putra' => $this->BerandaModel->jumlahSiswaProv('jumlah_putra', $i['id_provinsi']),
                'jumlah_putri' => $this->BerandaModel->jumlahSiswaProv('jumlah_putri', $i['id_provinsi']),
                'kms' => $this->BerandaModel->jumlahSiswaProv('kms', $i['id_provinsi']),
                'non_kms' => $this->BerandaModel->jumlahSiswaProv('non_kms', $i['id_provinsi']),
                'jumlah_siswa' => $this->BerandaModel->jumlahSiswaProv('jumlah_siswa', $i['id_provinsi']),
            );
        }
        $data['siswa'] = $temp;
        $this->load->view('public/data_pokok/siswa/siswa_default', $data);
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

    function kabupaten(){
        $kabupaten = $this->BerandaModel->getKabupatenbyProvinsi(
            $this->input->post('prov')
        );
        echo '<option value="0"> Pilih Kabupaten </option>';
        foreach ($kabupaten as $k){
            echo "<option value='$k->id'>".$k->kabupaten."</option>";
        }
    }
    function kecamatan(){
        $kecamatan = $this->BerandaModel->getKecamatanbyKabupaten(
            $this->input->post('kab')
        );
        echo '<option value="0"> Pilih Kecamatan </option>';
        foreach ($kecamatan as $k){
            echo "<option value='$k->kode_kec'>".$k->nama_kec."</option>";
        }
    }

    function cari(){
        $this->load->view('beranda');
    }

    function hasil(){

        $data2['cari'] = $this->BerandaModel->cariSekolah();
        $this->load->view('public/cari', $data2);
    }

    function detail_sekolah(){
        $this->load->view('public/detail_sekolah');
    }

}
?>