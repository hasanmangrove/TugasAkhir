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
        </ul>
    </div>
    <div class="menu_section">
        <h3>Live On</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="e_commerce.html">E-commerce</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="project_detail.html">Project Detail</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="profile.html">Profile</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="page_403.html">403 Error</a></li>
                    <li><a href="page_404.html">404 Error</a></li>
                    <li><a href="page_500.html">500 Error</a></li>
                    <li><a href="plain_page.html">Plain Page</a></li>
                    <li><a href="login.html">Login Page</a></li>
                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#level1_1">Level One</a>
                    <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#level1_2">Level One</a>
                    </li>
                </ul>
            </li>
            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
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