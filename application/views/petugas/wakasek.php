<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 27/05/2017
 * Time: 21.54
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Petugas - Sekolahku</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets'); ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url('assets'); ?>/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url('assets'); ?>/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url('assets'); ?>/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url('assets'); ?>/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('assets'); ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets'); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?php echo base_url(''); ?>" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <?php require 'assets/menu_profile_quick_info.php'; ?>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <?php require 'assets/sidebar_menu.php'; ?>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <?php require 'assets/top_navigation.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Aset Bangunan</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2><?php echo $profil[0]->nama_sekolah; ?></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left">

                                        <!-- Nama Kepala Sekolah -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Nama Wakil Kepala Sekolah" name="wakil_kepala" value="<?php echo $wakasek[0]->wakil_kepala; ?>">
                                            </div>
                                        </div>

                                        <!-- NBM -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">NBM</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="NBM" name="nbm" value="<?php echo $wakasek[0]->nbm; ?>">
                                            </div>
                                        </div>

                                        <!-- Tahun Ajaran -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tahun Ajaran</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Tahun Ajaran" name="tahun_ajaran" value="<?php echo $wakasek[0]->tahun_ajaran; ?>">
                                            </div>
                                        </div>

                                        <!-- Waka Bidang -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Bidang</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Bidang Wakil Kepala" name="waka_bidang" value="<?php echo $wakasek[0]->waka_bidang; ?>">
                                            </div>
                                        </div>

                                        <!-- SK Pengangkatan -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">SK Pengangkatan</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="SK Pengangkatan" name="sk_pengangkatan" value="<?php echo $wakasek[0]->sk_pengangkatan; ?>">
                                            </div>
                                        </div>

                                        <!-- Tanggal SK -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal SK</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                <input type="text" class="form-control" data-inputmask="'mask': '9999-99-99'" name="tgl_sk" value="<?php echo $wakasek[0]->tgl_sk; ?>">
                                                <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                        </div>

                                        <!-- Asal SK -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Asal SK</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Asal SK" name="asal_sk" value="<?php echo $wakasek[0]->asal_sk; ?>">
                                            </div>
                                        </div>

                                        <!-- Tmt Jabatan -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal SK</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                <input type="text" class="form-control" data-inputmask="'mask': '9999-99-99'" name="tmt_jabatan" value="<?php echo $wakasek[0]->tmt_jabatan; ?>">
                                                <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                        </div>

                                        <!-- Masa Tugas Ke -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Masa Tugas Ke</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Masa Tugsa Ke" name="masa_tugaske" value="<?php echo $wakasek[0]->masa_tugaske; ?>">
                                            </div>
                                        </div>

                                        <!-- Tanggal Habis -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Habis</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                <input type="text" class="form-control" data-inputmask="'mask': '9999-99-99'" name="tgl_habis" value="<?php echo $wakasek[0]->tgl_habis; ?>">
                                                <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="button" class="btn btn-primary">Cancel</button>
                                                <button type="reset" class="btn btn-primary">Reset</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require 'assets/footer_content.php'; ?>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url('assets'); ?>/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets'); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets'); ?>/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url('assets'); ?>/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo base_url('assets'); ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets'); ?>/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url('assets'); ?>/vendors/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="<?php echo base_url('assets'); ?>/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="<?php echo base_url('assets'); ?>/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- jquery.inputmask -->
<script src="<?php echo base_url('assets'); ?>/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<!-- Switchery -->
<script src="<?php echo base_url('assets'); ?>/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets'); ?>/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="<?php echo base_url('assets'); ?>/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="<?php echo base_url('assets'); ?>/vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="<?php echo base_url('assets'); ?>/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="<?php echo base_url('assets'); ?>/vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('assets'); ?>/build/js/custom.min.js"></script>

</body>
</html>


