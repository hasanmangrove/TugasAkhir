<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * Login: Mangrove
 * Date: 22/05/2017
 * Time: 18.30
 */
class Petugas extends CI_Controller{
    public function index(){
        $this->load->view('petugas/ringkasan');
    }
}
?>