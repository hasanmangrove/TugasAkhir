<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 23/05/2017
 * Time: 21.55
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
                <a class="navbar-brand" href="page.php/?page=home"><img src="..images/logoo.png" alt="logo" align="center">SEKOLAHKU</a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="scroll active"><a href="page.php/?page=home">Home</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Profil <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php while ($dt=mysql_fetch_array($daftar)){
                                echo "<li><a href='page.php/?profil=".$dt['id_profil']."'> ".$dt['judul_profil']."</a></li>"; }
                            ?>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Guru <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="page.php?guru=direktori_guru"> Direktori Guru</a></li>
                            <li><a href="#"> Kurikulum</a></li>
                            <li><a href="page.php?guru=prestasi_guru"> Prestasi Guru</a></li>
                            <li><a href="#"> Kalender Akademik</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Siswa <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="page.php?siswa=direktori_siswa"> Direktori Siswa</a></li>
                            <li><a href="page.php?siswa=prestasi_siswa"> Prestasi Siswa</a></li>
                            <li><a href="#"> Keadaan Siswa</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Alumni <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="page.php?alumni=direktori_alumni"> Direktori Alumni</a></li>
                            <li><a href="page.php?alumni=info_alumni"> Info Alumni</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Fitur <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"> Agenda</a></li>
                            <li><a href="page.php?fitur=artikel"> Artikel</a></li>
                            <li><a href="page.php?fitur=berita"> Berita</a></li>
                            <li><a href="#"> Galery Photo</a></li>
                            <li><a href="#"> Galery Video</a></li>
                            <li><a href="#"> Link</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="#features">Question</a></li>
                    <li class="scroll"><a href="#services">Download</a></li>
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
