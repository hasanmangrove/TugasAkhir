<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 23/05/2017
 * Time: 21.54
 */

// mengambil segment url ke 1
$level = $this->uri->segment(1);

// menyesuaikan segment dengan header yang akan ditampilkan
if ($level == 'admin' || $level == 'Admin') {

    require 'header_admin.php';

} elseif ($level == 'petugas' || $level == 'Petugas') {

    require 'header_menejer.php';

} else{

    require 'header_public.php';

};
?>