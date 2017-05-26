<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 25/05/2017
 * Time: 09.20
 */
?>

<header id="header">
    <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?page=home"><img src="<?php echo base_url('assets/img/logoo.png'); ?>" alt="logo" align="center">SEKOLAHKU</a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="scroll active"><a href="?page=home">Beranda</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Profil <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Guru <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="?guru=direktori_guru"> Direktori Guru</a></li>
                            <li><a href=""> Kurikulum</a></li>
                            <li><a href="?guru=prestasi_guru"> Prestasi Guru</a></li>
                            <li><a href="#"> Kalender Akademik</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Siswa <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="?siswa=direktori_siswa"> Direktori Siswa</a></li>
                            <li><a href="?siswa=prestasi_siswa"> Prestasi Siswa</a></li>
                            <li><a href="#"> Keadaan Siswa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Alumni <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="?alumni=direktori_alumni"> Direktori Alumni</a></li>
                            <li><a href="?alumni=info_alumni"> Info Alumni</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Fitur <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"> Agenda</a></li>
                            <li><a href="?fitur=artikel"> Artikel</a></li>
                            <li><a href="?fitur=berita"> Berita</a></li>
                            <li><a href="#"> Galery Photo</a></li>
                            <li><a href="#"> Galery Video</a></li>
                            <li><a href="#"> Link</a></li>
                        </ul>
                    </li>
                    <li class="scroll"><a href="<?php echo base_url('login'); ?>">Login</a></li>
                    <!--
                   <li class="scroll"><a href="#services">Services</a></li>
                    <li class="scroll"><a href="#portfolio">Portfolio</a></li>
                    <li class="scroll"><a href="#about">About</a></li>
                    <li class="scroll"><a href="#meet-team">Team</a></li>
                    <li class="scroll"><a href="#pricing">Pricing</a></li>
                    <li class="scroll"><a href="#blog">Blog</a></li>
                    <li class="scroll"><a href="#get-in-touch">Contact</a></li>  -->
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->
