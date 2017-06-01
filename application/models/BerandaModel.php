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
        $this->db->where('id_provinsi', $$id_provinsi);
        $result = $this->db->get('kabupaten');
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

    function getSekolahProv($id){
        $query = $this->db->query(
            "SELECT COUNT(jenjang), jenjang FROM profil WHERE prov=$id GROUP BY jenjang;"
        );
        return $query;
    }

    function getSekolahKab($id){

    }

    function getSekolahKec($id){

    }
}