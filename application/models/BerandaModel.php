<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: mangrove
 * Date: 5/31/2017
 * Time: 8:11 PM
 */

class BerandaModel extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function provinsi(){
        $result = $this->db->get('provinsi');
        if($result->num_rows() > 0){
            return $result->result_array();
        }else{
            return array();
        }
    }

    function kabupaten($id_provinsi){
        $this->db->where('id_provinsi', $id_provinsi);
        $result = $this->db->get('kabupaten');
        if($result->num_rows() > 0){
            return $result->result_array();
        }else{
            return array();
        }
    }

    function kecamatan($id_kabupaten){
        $this->db->where('kode_kab', $id_kabupaten);
        $result = $this->db->get('kecamatan');
        if($result->num_rows() > 0){
            return $result->result_array();
        }else{
            return array();
        }
    }

    function sekolahByKec($id_kecamatan){
        $this->db->where('kec', $id_kecamatan);
        $result = $this->db->get('profil');
        if($result->num_rows() > 0){
            return $result->result_array();
        }else{
            return array();
        }
    }

    function getKecamatan(){
        return $this->db->get('kecamatan');
    }

    function getKabupatenbyProvinsi($id_provinsi){
        $this->db->select('*');
        $this->db->from('kabupaten');
        $this->db->where('id_provinsi',$id_provinsi);
        $this->db->order_by('kabupaten', 'asc');
        return $this->db->get()->result();
    }

    function getKecamatanbyKabupaten($id_kabupaten){
        $this->db->select('*');
        $this->db->from('kecamatan');
        $this->db->where('kode_kab',$id_kabupaten);
        $this->db->order_by('nama_kec', 'asc');
        return $this->db->get()->result();
    }

    function getSekolahProv($jenjang, $idProv){
        $this->db->select('COUNT(*) AS jumlah');
        $this->db->where('jenjang', $jenjang);
        $this->db->where('prov', $idProv);
        return $this->db->get('profil')->result();
    }

    function getSekolahKab($jenjang, $idKab){
        $this->db->select('COUNT(*) AS jumlah');
        $this->db->where('jenjang', $jenjang);
        $this->db->where('kab', $idKab);
        return $this->db->get('profil')->result();
    }

    function getSekolahKec($jenjang, $idKec){
        $this->db->select('COUNT(*) AS jumlah');
        $this->db->where('jenjang', $jenjang);
        $this->db->where('kec', $idKec);
        return $this->db->get('profil')->result();
    }

    // mengambil data sekolah di pencarian data pokok -> data sekolah
    function getsekolah($field, $idKec){
        $this->db->select($field);
        $this->db->where('kec', $idKec);
        return $this->db->get('profil')->result();
    }

    // ------------ Data Pokok / Sekolah --------------- //

    function getSekolahKol($kolom, $where, $group=NULL){
        $this->db->select($kolom);
        $this->db->where($where);
        if(isset($group)){
            $this->db->group_by($group);
        }
        $result = $this->db->get('profil');
        if($result->num_rows() > 0){
            return $result->result_array();
        }else{
            return array();
        }
    }

    // ----------- Data Pokok / Wakasek ---------------- //

    function getWakasekKol($kolom, $where, $group=NULL){
        $this->db->select($kolom);
        $this->db->where($where);
        if(isset($group)){
            $this->db->group_by($group);
        }
        $result = $this->db->get('v_wakasek_profil');
        if($result->num_rows() > 0){
            return $result->result_array();
        }else{
            return array();
        }
    }

    //-------------- Data Pokok / Siswa -------------//

    function getSiswaKol($kolom, $where, $group=NULL){
        $this->db->select($kolom);
        $this->db->where($where);
        if(isset($group)){
            $this->db->group_by($group);
        }
        $result = $this->db->get('v_siswa_profil');
        if($result->num_rows() > 0){
            return $result->result_array();
        }else{
            return array();
        }
    }

    function jumlahSiswaProv($field, $idProv){
        $this->db->select('SUM('.$field.') AS jumlah');
        $this->db->where('prov', $idProv);
        return $this->db->get('v_siswa_profil')->result_array();
    }

    function jumlahSiswaKab($field, $idKab){
        $this->db->select('SUM('.$field.') AS jumlah');
        $this->db->where('kab', $idKab);
        return $this->db->get('v_siswa_profil')->result_array();
    }

    function jumlahSiswaKec($field, $idKec){
        $this->db->select('SUM('.$field.') AS jumlah');
        $this->db->where('kec', $idKec);
        return $this->db->get('v_siswa_profil')->result_array();
    }

    // -------------- ringkasan beranda ------------- //

    function getJumlahSekolah(){
        return $this->db->count_all('profil');
    }

    function getJumlahGuru(){
        return $this->db->count_all('data_guru');
    }

    function getJumlahTenagaPen(){
        return $this->db->count_all('tenkependik');
    }

    function getJumlahKMS(){
        $this->db->select('SUM(kms) AS jumlah');
        return $this->db->get('siswa')->result_array();
    }

    function getJumlahSiswa(){
        $this->db->select('SUM(jumlah_siswa) AS jumlah');
        return $this->db->get('siswa')->result_array();
    }

    function getJumlahPrestasi(){
        return $this->db->count_all('prestasi');
    }

    // ------------- Cari -------------- //
    function cariSekolah(){
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT *from profil where nama_sekolah like '%$cari%' OR npsn='$cari'");
        return $data->result();
    }

    // ------------- Detail Data ---------------- //
    function getProfil($npsn){
        $this->db->where('npsn', $npsn);
        return $this->db->get('profil')->result_array();
    }

    function getAsetBangunan($npsn){
        $this->db->where('npsn', $npsn);
        return $this->db->get('aset_bangunan')->result_array();
    }

    function getAsetTanah($npsn){
        $this->db->where('npsn', $npsn);
        return $this->db->get('aset_tanah')->result_array();
    }

    function getDataGuru($npsn){
        $this->db->where('npsn', $npsn);
        return $this->db->get('data_guru')->result_array();
    }

    function getKepsek($npsn){
        $this->db->where('npsn', $npsn);
        $result = $this->db->get('kepsek');
        if($result->num_rows() > 0){
            return $result->result_array();
        }else{
            return array();
        }
    }

    function getWakasek($npsn){
        $this->db->where('npsn', $npsn);
        return $this->db->get('wakasek')->result_array();
    }

    function getTenkependik($npsn){
        $this->db->where('npsn', $npsn);
        return $this->db->get('tenkependik')->result_array();
    }

    function getUser($npsn){
        $this->db->where('npsn', $npsn);
        return $this->db->get('user')->result_array();
    }

    function getPrestasi($npsn){
        $this->db->where('npsn', $npsn);
        return $this->db->get('prestasi')->result_array();
    }

    function getSarpras($npsn){
        $this->db->where('npsn', $npsn);
        return $this->db->get('sarpras')->result_array();
    }

    function getSiswa($npsn){
        $this->db->where('npsn', $npsn);
        return $this->db->get('profil')->result_array();
    }

    function getJurusan($npsn){
        $this->db->where('npsn', $npsn);
        return $this->db->get('jurusan')->result_array();
    }

    function getNamaProvinsi($idProv){
        $this->db->where('id_provinsi', $idProv);
        return $this->db->get('provinsi')->result_array();
    }

    function getNamaKabupaten($idKab){
        $this->db->where('id', $idKab);
        return $this->db->get('kabupaten')->result_array();
    }

    function getNamaKecamatan($idKec){
        $this->db->where('kode_kec', $idKec);
        return $this->db->get('kecamatan')->result_array();
    }
}