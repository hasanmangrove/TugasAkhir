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

    function sekolah($idProv=NULL, $idKab=NULL, $idKec=NULL){
        if($idKec !== NULL){
            $data['sekolah'] = $this->BerandaModel->getSekolahKol('*', array('kec' => $idKec));
            $this->load->view('public/data_pokok/sekolah/sekolah_kec', $data);
        } elseif ($idKab !== NULL){
            $kecamatan = $this->BerandaModel->kecamatan($idKab);
            $temp = array();
            foreach ($kecamatan as $i){
                $temp[] = array(
                    'id_kecamatan' => $i['kode_kec'],
                    'nama_kecamatan' => $i['nama_kec'],
                    'SD' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kec' => $i['kode_kec'], 'jenjang' => 'SD')),
                    'MI' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kec' => $i['kode_kec'], 'jenjang' => 'MI')),
                    'SMP' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kec' => $i['kode_kec'], 'jenjang' => 'SMP')),
                    'MTS' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kec' => $i['kode_kec'], 'jenjang' => 'MTS')),
                    'SMA' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kec' => $i['kode_kec'], 'jenjang' => 'SMA')),
                    'SMK' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kec' => $i['kode_kec'], 'jenjang' => 'SMK')),
                    'MA' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kec' => $i['kode_kec'], 'jenjang' => 'MA')),
                    'SLB' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kec' => $i['kode_kec'], 'jenjang' => 'SLB')),
                );
            }
            $data['sekolah'] = $temp;
            $this->load->view('public/data_pokok/sekolah/sekolah_kab', $data);
        }elseif ($idProv !== NULL){
            $kabupaten = $this->BerandaModel->kabupaten($idProv);
            $temp = array();
            foreach ($kabupaten as $i){
                $temp[] = array(
                    'id_kabupaten' => $i['id'],
                    'nama_kabupaten' => $i['kabupaten'],
                    'SD' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kab' => $i['id'], 'jenjang' => 'SD')),
                    'MI' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kab' => $i['id'], 'jenjang' => 'MI')),
                    'SMP' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kab' => $i['id'], 'jenjang' => 'SMP')),
                    'MTS' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kab' => $i['id'], 'jenjang' => 'MTS')),
                    'SMA' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kab' => $i['id'], 'jenjang' => 'SMA')),
                    'SMK' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kab' => $i['id'], 'jenjang' => 'SMK')),
                    'MA' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kab' => $i['id'], 'jenjang' => 'MA')),
                    'SLB' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('kab' => $i['id'], 'jenjang' => 'SLB'))
                );
            }
            $data['sekolah'] = $temp;
            $this->load->view('public/data_pokok/sekolah/sekolah_prov', $data);
        } else {
            $provinsi = $this->BerandaModel->provinsi();
            $temp = array();
            foreach ($provinsi as $i){
                $temp[] = array(
                    'id_provinsi' => $i['id_provinsi'],
                    'nama_provinsi' => $i['nama'],
                    'SD' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('prov' => $i['id_provinsi'], 'jenjang' => 'SD')),
                    'MI' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('prov' => $i['id_provinsi'], 'jenjang' => 'MI')),
                    'SMP' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('prov' => $i['id_provinsi'], 'jenjang' => 'SMP')),
                    'MTS' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('prov' => $i['id_provinsi'], 'jenjang' => 'MTS')),
                    'SMA' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('prov' => $i['id_provinsi'], 'jenjang' => 'SMA')),
                    'SMK' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('prov' => $i['id_provinsi'], 'jenjang' => 'SMK')),
                    'MA' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('prov' => $i['id_provinsi'], 'jenjang' => 'MA')),
                    'SLB' => $this->BerandaModel->getSekolahKol('COUNT(jenjang) AS jumlah', array('prov' => $i['id_provinsi'], 'jenjang' => 'SLB'))
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

    function siswa($idProv=NULL, $idKab=NULL, $idKec=NULL){
        if($idKec !== NULL){
            $data['siswa'] = $this->BerandaModel->getSiswaKol('*', array('kec' => $idKec));
            $this->load->view('public/data_pokok/siswa/siswa_kec', $data);
        } elseif ($idKab !== NULL){
            $kecamatan = $this->BerandaModel->kecamatan($idKab);
            $temp = array();
            foreach ($kecamatan as $i){
                $temp[] = array(
                    'id_kecamatan' => $i['kode_kec'],
                    'nama_kecamatan' => $i['nama_kec'],
                    'jumlah_putra' => $this->BerandaModel->getSiswaKol('SUM(jumlah_putra) AS jumlah', array('kec' => $i['kode_kec'])),
                    'jumlah_putri' => $this->BerandaModel->getSiswaKol('SUM(jumlah_putri) AS jumlah', array('kec' => $i['kode_kec'])),
                    'kms' => $this->BerandaModel->getSiswaKol('SUM(kms) AS jumlah', array('kec' => $i['kode_kec'])),
                    'non_kms' => $this->BerandaModel->getSiswaKol('SUM(non_kms) AS jumlah', array('kec' => $i['kode_kec']))
                );
            }
            $data['siswa'] = $temp;
            $this->load->view('public/data_pokok/siswa/siswa_kab', $data);
        }elseif ($idProv !== NULL){
            $kabupaten = $this->BerandaModel->kabupaten($idProv);
            $temp = array();
            foreach ($kabupaten as $i){
                $temp[] = array(
                    'id_kabupaten' => $i['id'],
                    'nama_kabupaten' => $i['kabupaten'],
                    'jumlah_putra' => $this->BerandaModel->getSiswaKol('SUM(jumlah_putra) AS jumlah', array('kab' => $i['id'])),
                    'jumlah_putri' => $this->BerandaModel->getSiswaKol('SUM(jumlah_putri) AS jumlah', array('kab' => $i['id'])),
                    'kms' => $this->BerandaModel->getSiswaKol('SUM(kms) AS jumlah', array('kab' => $i['id'])),
                    'non_kms' => $this->BerandaModel->getSiswaKol('SUM(non_kms) AS jumlah', array('kab' => $i['id']))
                );
            }
            $data['siswa'] = $temp;
            $this->load->view('public/data_pokok/siswa/siswa_prov', $data);
        } else {
            $provinsi = $this->BerandaModel->provinsi();
            $temp = array();
            foreach ($provinsi as $i){
                $temp[] = array (
                    'id_provinsi' => $i['id_provinsi'],
                    'nama_provinsi' => $i['nama'],
                    'jumlah_putra' => $this->BerandaModel->getSiswaKol('SUM(jumlah_putra) AS jumlah', array('prov' => $i['id_provinsi'])),
                    'jumlah_putri' => $this->BerandaModel->getSiswaKol('SUM(jumlah_putri) AS jumlah', array('prov' => $i['id_provinsi'])),
                    'kms' => $this->BerandaModel->getSiswaKol('SUM(kms) AS jumlah', array('prov' => $i['id_provinsi'])),
                    'non_kms' => $this->BerandaModel->getSiswaKol('SUM(non_kms) AS jumlah', array('prov' => $i['id_provinsi']))
                );
            }
            $data['siswa'] = $temp;
            $this->load->view('public/data_pokok/siswa/siswa_default', $data);
        }
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


    // --------------- Detail Data -------------- //

    function detail_sekolah($npsn){
        $data['profil'] = $this->BerandaModel->getProfil($npsn);
        $data['aset_bangunan'] = $this->BerandaModel->getAsetBangunan($npsn);
        $data['data_guru'] = $this->BerandaModel->getDataGuru($npsn);
        $data['jurusan'] = $this->BerandaModel->getJurusan($npsn);
        $data['kepsek'] = $this->BerandaModel->getKepsek($npsn);
        $data['prestasi'] = $this->BerandaModel->getPrestasi($npsn);
        $data['sarpras'] = $this->BerandaModel->getSarpras($npsn);
        $data['siswa'] = $this->BerandaModel->getSiswa($npsn);
        $data['tenkependik'] = $this->BerandaModel->getTenkependik($npsn);
        $data['user'] = $this->BerandaModel->getUser($npsn);
        $data['wakasek'] = $this->BerandaModel->getWakasek($npsn);
        $data['kecamatan'] = $this->BerandaModel->getNamaKecamatan($data['profil'][0]['kec']);
        $data['kabupaten'] = $this->BerandaModel->getNamaKabupaten($data['profil'][0]['kab']);
        $data['provinsi'] = $this->BerandaModel->getNamaProvinsi($data['profil'][0]['prov']);
        $this->load->view('public/detail_sekolah', $data);
    }

    function detail_siswa($npsn){
        $data['siswa'] = $this->BerandaModel->getSiswa($npsn);
        $data['profil'] = $this->BerandaModel->getProfil($npsn);
        $data['kecamatan'] = $this->BerandaModel->getNamaKecamatan($data['profil'][0]['kec']);
        $data['kabupaten'] = $this->BerandaModel->getNamaKabupaten($data['profil'][0]['kab']);
        $data['provinsi'] = $this->BerandaModel->getNamaProvinsi($data['profil'][0]['prov']);
        $this->load->view('public/detail_siswa', $data);
    }

    function detail_kepsek(){
        $this->load->view('public/detail_kepsek');
    }

    function detail_pegawai(){
        $this->load->view('public/detail_pegawai');
    }

    function detail_prestasi(){
        $this->load->view('public/detail_prestasi');
    }

    function detail_guru(){
        $this->load->view('public/detail_guru');
    }

    function detail_wakasek(){
        $this->load->view('public/detail_wakasek');
    }

}
?>