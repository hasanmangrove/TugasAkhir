<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 22/05/2017
 * Time: 18.54
 */
class AdminModel extends CI_Model{
    public function lihat_user(){
        return $this->db->get('v_user');
    }
}
?>