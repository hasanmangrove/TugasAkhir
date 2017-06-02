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

    function getJumlahSekolah($jenjang, $prov=NULL, $kab=NULL, $kec=NULL){
        $this->db->select('COUNT(*) AS jumlah');
        if($kec !== NULL && $prov === NULL && $kab === NULL){
            $this->db->where('jenjang', $jenjang);
            $this->db->where('kec', $kec);
        }elseif ($kab !== NULL && $prov === NULL && $kec === NULL){
            $this->db->where('jenjang', $jenjang);
            $this->db->where('kab', $kab);
        }elseif ($prov !== NULL && $kec === NULL && $kab === NULL){
            $this->db->where('jenjang', $jenjang);
            $this->db->where('prov', $prov);
        }
        return $this->db->get('profil')->result();
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

}