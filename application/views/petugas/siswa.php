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
                                <p class="text-muted font-13 m-b-30">
                                    The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                                </p>
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Rombel</th>
                                        <th>Laki-laki</th>
                                        <th>Perempuan</th>
                                        <th>KMS</th>
                                        <th>NON-KMS</th>
                                        <th>Jumlah Siswa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($siswa as $i){ ?>
                                        <tr>
                                            <td><?php echo ++$no; ?></td>
                                            <td><?php echo $i->tahun_ajaran; ?></td>
                                            <td><?php echo $i->kelas; ?></td>
                                            <td><?php echo $i->jurusan; ?></td>
                                            <td><?php echo $i->rombel; ?></td>
                                            <td><?php echo $i->jumlah_putra; ?></td>
                                            <td><?php echo $i->jumlah_putri; ?></td>
                                            <td><?php echo $i->kms; ?></td>
                                            <td><?php echo $i->non_kms; ?></td>
                                            <td><?php echo $i->jumlah_siswa; ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
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


