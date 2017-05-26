<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * Login: Mangrove
 * Date: 22/05/2017
 * Time: 18.27
 */
class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!($this->session->userdata('level') == 1)) {
            if (!$this->session->userdata('username')){
                redirect('login');
            }
            redirect('login');
        }
    }

    public function index(){
        $this->load->view('admin/ringkasan');
    }

    function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('login');
    }
}
?>