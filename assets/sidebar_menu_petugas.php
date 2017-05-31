<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 27/05/2017
 * Time: 10.53
 */
?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="<?php echo base_url('petugas'); ?>"><i class="fa fa-home"></i> Dashboard </a>
            </li>
            <li><a><i class="fa fa-mortar-board"></i> Sekolah <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('petugas/sekolah'); ?>">Ringkasan</a></li>
                    <li><a href="<?php echo base_url('petugas/profil_sekolah'); ?>">Profil</a></li>
                    <li><a href="<?php echo base_url('petugas/bangunan'); ?>">Aset Bangunan</a></li>
                    <li><a href="<?php echo base_url('petugas/tanah'); ?>">Aset Tanah</a></li>
                    <li><a href="<?php echo base_url('petugas/jurusan'); ?>">Jurusan</a></li>
                    <li><a href="<?php echo base_url('petugas/siswa'); ?>">Siswa</a></li>
                    <li><a href="<?php echo base_url('petugas/sarana'); ?>">Sarana Prasarana</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-group"></i> Struktur <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('petugas/struktur'); ?>">Ringkasan</a></li>
                    <li><a href="<?php echo base_url('petugas/kepsek'); ?>">Kepala Sekolah</a></li>
                    <li><a href="<?php echo base_url('petugas/wakasek'); ?>">Wakil Kepsek</a></li>
                    <li><a href="<?php echo base_url('petugas/guru'); ?>">Guru</a></li>
                    <li><a href="<?php echo base_url('petugas/tenaga_pendidikan'); ?>">Tenaga Pendidikan</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-trophy"></i> Prestasi <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('petugas/prestasi'); ?>">Ringkasan</a></li>
                    <li><a href="<?php echo base_url('petugas/tambah_prestasi'); ?>">Tambah Prestasi</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-wrench"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('petugas/profil'); ?>">Profil</a></li>
                    <li><a href="<?php echo base_url('petugas/pengaturan'); ?>">Pengaturan</a></li>
                    <li><a href="<?php echo base_url('petugas/bantuan'); ?>">Bantuan</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>


<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('petugas/logout'); ?>">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->