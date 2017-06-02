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
        $data['sekolah'] = array();
        if($this->input->post('submit') === ''){
            if($this->input->post('kec') !== '0'){
            } elseif ($this->input->post('kab') !== '0') {
                $data['provinsi'] = $this->BerandaModel->provinsi();
                $kec = $this->BerandaModel->kabupaten($this->input->post('kab'));
                print_r($kec);
                die();
                $temp = array();
                foreach ($kec as $i){
                    $temp[] = array(
                        'kecamatan' => $i['kabupaten'],
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
            foreach ($prov as $i){
                $temp[] = array(
                    'provinsi' => $i['nama'],
                    'jenjang' => array(
                        'SD'    => $this->BerandaModel->getSekolahProv('SD', $i['id_provinsi']),
                        'MI'    => $this->BerandaModel->getSekolahProv('MI', $i['id_provinsi']),
                        'SMP'   => $this->BerandaModel->getSekolahProv('SMP', $i['id_provinsi']),
                        'MTS'   => $this->BerandaModel->getSekolahProv('MTS', $i['id_provinsi']),
                        'SMA'   => $this->BerandaModel->getSekolahProv('SMA', $i['id_provinsi']),
                        'SMK'   => $this->BerandaModel->getSekolahProv('SMK', $i['id_provinsi']),
                        'MA'    => $this->BerandaModel->getSekolahProv('MA', $i['id_provinsi']),
                        'SLB'   => $this->BerandaModel->getSekolahProv('SLB', $i['id_provinsi'])
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

}
?>