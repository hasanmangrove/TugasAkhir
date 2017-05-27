<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * Login: Mangrove
 * Date: 22/05/2017
 * Time: 18.27
 */

class Login extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->helper('site_helper');
    }

    public function index(){
        $this->load->view('public/login');
    }

    public function cek_login(){

        $this->load->model('UserModel');

        $data = array(
            'username' => $this->input->post('username'));
        $hasil = $this->UserModel->cek_user($data);

        if ($hasil->num_rows() == 1){

                foreach ($hasil->result() as $sess){
                    $sess_data['logged_in'] = 'Sudah Login';
                    $sess_data['Nama'] = $sess->Nama;
                    $sess_data['username'] = $sess->username;
                    $sess_data['level'] = $sess->level;
                    $sess_data['npsn'] = $sess->npsn;
                    $this->session->set_userdata($sess_data);
                }
                if ($this->session->userdata('level') == 1){
                    redirect('admin');
                } elseif ($this->session->userdata('level') == 0) {
                    redirect('petugas');
                }
        } else {
            echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
        }
    }
}
?>