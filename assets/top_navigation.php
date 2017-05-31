<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 27/05/2017
 * Time: 10.58
 */

// mengambil segment url ke 1
$level = $this->uri->segment(1);

// menyesuaikan segment dengan header yang akan ditampilkan
if ($level == 'admin' || $level == 'Admin') {

    require 'top_navigation_admin.php';

} elseif ($level == 'petugas' || $level == 'Petugas') {

    require 'top_navigation_petugas.php';

} else{

    require 'top_navigation_public.php';

}
?>