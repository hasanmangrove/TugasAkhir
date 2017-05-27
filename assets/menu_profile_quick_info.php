<?php
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 27/05/2017
 * Time: 11.14
 */
?>

<div class="profile clearfix">
    <div class="profile_pic">
        <img src="<?php echo base_url('assets'); ?>/images/img.jpg" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Selamat datang,</span>
        <h2><?php echo $this->session->userdata('Nama'); ?></h2>
        <h5><?php echo $this->session->userdata('npsn'); ?></h5>
    </div>
</div>
