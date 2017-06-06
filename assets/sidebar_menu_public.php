<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: mangrove
 * Date: 5/31/2017
 * Time: 3:36 PM
 */
?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <div  class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url('beranda'); ?>" class="site_title"><span>Camara.co.id</span></a>
        </div>
        <h3>Menu</h3>
        <ul class="nav side-menu">
            <li><a href="<?php echo base_url('beranda'); ?>"><i class="fa fa-home"></i> Beranda </a>
            <?php
                if($this->session->userdata('level') === '1'){?>
                    <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Dashboard Admin </a>
                <?php } elseif($this->session->userdata('level') === '0'){?>
                    <li><a href="<?php echo base_url('petugas'); ?>"><i class="fa fa-dashboard"></i> Dashboard Petugas </a>
                <?php }
            ?>
            <li><a><i class="fa fa-database"></i> Data Pokok <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('beranda/sekolah'); ?>">Data Sekolah</a></li>
                    <li><a href="<?php echo base_url('beranda/siswa'); ?>">Data Siswa</a></li>
                    <li><a href="<?php echo base_url('beranda/pegawai'); ?>">Data Pegawai</a></li>
                    <li><a href="<?php echo base_url('beranda/prestasi'); ?>">Data Prestasi</a></li>
                    <li><a href="<?php echo base_url('beranda/guru'); ?>">Data Guru</a></li>
                    <li><a href="<?php echo base_url('beranda/kepsek'); ?>">Data Kepala Sekolah</a></li>
                    <li><a href="<?php echo base_url('beranda/wakasek'); ?>">Data Wakil Kepala Sekolah</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-bar-chart-o"></i> Pertumbuhan Data <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('beranda/pertumbuhan'); ?>">Ringkasan</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Lebih Lanjut</h3>
        <ul class="nav side-menu">
            <li><a href="<?php echo base_url('beranda/kontak'); ?>"><i class="fa fa-paper-plane"></i> Kontak </a></li>
            <li><a href="<?php echo base_url('beranda/tentang'); ?>"><i class="fa fa-info-circle"></i> Tentang </a></li>
        </ul>
    </div>

</div>
