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
    }

    public function index(){
        $this->load->view('petugas/dashboard');
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