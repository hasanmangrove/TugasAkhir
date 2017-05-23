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
        $hasil = $this->model_user->cek_user($data);

        if ($hasil->num_rows() == 1){

            $password_crypt = $data['password'];
            $password_login = $post = array('password' => $this->input->post('password'));

            if ($password_crypt == crypt($password_login,$password_crypt)){
                foreach ($hasil->result() as $sess){
                    $sess_data['logged_in'] = 'Sudah Login';
                    $sess_data['username'] = $sess->username;
                    $sess_data['level'] = $sess->level;
                    $this->session->set_userdata($sess_data);
                }

                if ($this->session->userdata('level') == 'admin'){
                    redirect('admin');
                } elseif ($this->session->userdata('level') == 'petugas') {
                    redirect('petugas');
                }
            } else {
                echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
            }

        } else {
            echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
        }
    }
}
?>