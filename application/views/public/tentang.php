<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: mangrove
 * Date: 5/29/2017
 * Time: 11:36 PM
 */
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * Login: Mangrove
 * Date: 22/05/2017
 * Time: 18.31
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

    <title>Beranda - Sekolahku </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets'); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?php echo base_url('beranda'); ?>" class="site_title"><i class="fa fa-paw"></i> <span>Sekolahku</span></a>
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
                        <h3>Tentang Kami</h3>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                        <div class="well profile_view">
                                            <div class="col-sm-12">
                                                <h4 class="brief"><i>Project Leader</i></h4>
                                                <div class="left col-xs-7">
                                                    <h2>Musyafa Irfan</h2>
                                                    <p><strong>Tentang: </strong> Youtuber / Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-building"></i> Alamat: Yogyakarta</li>
                                                        <li><i class="fa fa-phone"></i> Phone : 085745673173 </li>
                                                    </ul>
                                                </div>
                                                <div class="right col-xs-5 text-center">
                                                    <img src="<?php echo base_url('assets'); ?>/images/img.jpg" alt="" class="img-circle img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <p class="ratings">
                                                        <a>5.0</a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                    </p>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                        </i> <i class="fa fa-comments-o"></i> </button>
                                                    <button type="button" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-user"> </i> View Profile
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                        <div class="well profile_view">
                                            <div class="col-sm-12">
                                                <h4 class="brief"><i>Project Leader</i></h4>
                                                <div class="left col-xs-7">
                                                    <h2>Musyafa Irfan</h2>
                                                    <p><strong>Tentang: </strong> Youtuber / Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-building"></i> Alamat: Yogyakarta</li>
                                                        <li><i class="fa fa-phone"></i> Phone : 085745673173 </li>
                                                    </ul>
                                                </div>
                                                <div class="right col-xs-5 text-center">
                                                    <img src="<?php echo base_url('assets'); ?>/images/img.jpg" alt="" class="img-circle img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <p class="ratings">
                                                        <a>5.0</a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                    </p>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                        </i> <i class="fa fa-comments-o"></i> </button>
                                                    <button type="button" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-user"> </i> View Profile
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                        <div class="well profile_view">
                                            <div class="col-sm-12">
                                                <h4 class="brief"><i>Project Leader</i></h4>
                                                <div class="left col-xs-7">
                                                    <h2>Musyafa Irfan</h2>
                                                    <p><strong>Tentang: </strong> Youtuber / Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-building"></i> Alamat: Yogyakarta</li>
                                                        <li><i class="fa fa-phone"></i> Phone : 085745673173 </li>
                                                    </ul>
                                                </div>
                                                <div class="right col-xs-5 text-center">
                                                    <img src="<?php echo base_url('assets'); ?>/images/img.jpg" alt="" class="img-circle img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <p class="ratings">
                                                        <a>5.0</a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                    </p>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                        </i> <i class="fa fa-comments-o"></i> </button>
                                                    <button type="button" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-user"> </i> View Profile
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                        <div class="well profile_view">
                                            <div class="col-sm-12">
                                                <h4 class="brief"><i>Project Leader</i></h4>
                                                <div class="left col-xs-7">
                                                    <h2>Musyafa Irfan</h2>
                                                    <p><strong>Tentang: </strong> Youtuber / Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-building"></i> Alamat: Yogyakarta</li>
                                                        <li><i class="fa fa-phone"></i> Phone : 085745673173 </li>
                                                    </ul>
                                                </div>
                                                <div class="right col-xs-5 text-center">
                                                    <img src="<?php echo base_url('assets'); ?>/images/img.jpg" alt="" class="img-circle img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <p class="ratings">
                                                        <a>5.0</a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                    </p>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                        </i> <i class="fa fa-comments-o"></i> </button>
                                                    <button type="button" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-user"> </i> View Profile
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require 'assets/footer_content.php'?>
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

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('assets'); ?>/build/js/custom.min.js"></script>
</body>
</html>
