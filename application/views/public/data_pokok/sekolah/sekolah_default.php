<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: mangrove
 * Date: 5/29/2017
 * Time: 11:36 PM
 */

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>" type="text/javascript" charset="utf-8" async defer> </script><!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Beranda - Sekolahku</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url('assets'); ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets'); ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets'); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?php echo base_url('beranda'); ?>" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>
                <div class="clearfix"></div>
                <br />
                <!-- sidebar menu -->
                <?php require 'assets/sidebar_menu.php'?>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <?php require 'assets/top_navigation.php'?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>/beranda/sekolah</h3>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Data Sekolah</h2>
                                <ul class="nav navbar-right">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table id="datatable-buttons" name="table-data" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Provinsi</th>
                                            <th>SD</th>
                                            <th>MI</th>
                                            <th>SMP</th>
                                            <th>MTS</th>
                                            <th>SMA</th>
                                            <th>SMK</th>
                                            <th>MA</th>
                                            <th>SLB</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sum = 0;
                                    foreach ($sekolah as $i){ ?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo base_url('beranda/sekolah/'.$i['id_provinsi'])?>">
                                                    <?php echo $i['nama_provinsi']; ?>
                                                </a>
                                            </td>
                                            <td><?php
                                                if(isset($i['SD'][0]['jumlah'])){
                                                    echo $i['SD'][0]['jumlah'];
                                                    $sum += $i['SD'][0]['jumlah'];
                                                } else {
                                                    echo '0';
                                                }; ?>
                                            </td>
                                            <td><?php
                                                if(isset($i['MI'][0]['jumlah'])){
                                                    echo $i['MI'][0]['jumlah'];
                                                    $sum += $i['MI'][0]['jumlah'];
                                                } else {
                                                    echo '0';
                                                }; ?>
                                            </td>
                                            <td><?php
                                                if(isset($i['SMP'][0]['jumlah'])){
                                                    echo $i['SMP'][0]['jumlah'];
                                                    $sum += $i['SMP'][0]['jumlah'];
                                                } else {
                                                    echo '0';
                                                }; ?>
                                            </td>
                                            <td><?php
                                                if(isset($i['MTS'][0]['jumlah'])){
                                                    echo $i['MTS'][0]['jumlah'];
                                                    $sum += $i['MTS'][0]['jumlah'];
                                                } else {
                                                    echo '0';
                                                }; ?>
                                            </td>
                                            <td><?php
                                                if(isset($i['SMA'][0]['jumlah'])){
                                                    echo $i['SMA'][0]['jumlah'];
                                                    $sum += $i['SMA'][0]['jumlah'];
                                                } else {
                                                    echo '0';
                                                }; ?>
                                            </td>
                                            <td><?php
                                                if(isset($i['SMK'][0]['jumlah'])){
                                                    echo $i['SMK'][0]['jumlah'];
                                                    $sum += $i['SMK'][0]['jumlah'];
                                                } else {
                                                    echo '0';
                                                }; ?>
                                            </td>
                                            <td><?php
                                                if(isset($i['MA'][0]['jumlah'])){
                                                    echo $i['MA'][0]['jumlah'];
                                                    $sum += $i['MA'][0]['jumlah'];
                                                } else {
                                                    echo '0';
                                                }; ?>
                                            </td>
                                            <td><?php
                                                if(isset($i['SLB'][0]['jumlah'])){
                                                    echo $i['SLB'][0]['jumlah'];
                                                    $sum += $i['SLB'][0]['jumlah'];
                                                } else {
                                                    echo '0';
                                                }; ?>
                                            </td>
                                            <td>
                                                <?php echo $sum; $sum = 0; ?>
                                            </td>
                                        </tr>
                                    <?php }; ?>
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
<!-- iCheck -->
<script src="<?php echo base_url('assets'); ?>/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('assets'); ?>/build/js/custom.min.js"></script>
</body>
</html>
