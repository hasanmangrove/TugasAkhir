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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sekolahku</title>
    <!-- core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/owl.carousel.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/owl.transitions.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/prettyPhoto.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet">
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/ico/favicon.ico'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/img/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/img/ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/img/ico/apple-touch-icon-72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/img/ico/apple-touch-icon-57-precomposed.png'); ?>">
</head><!--/head-->

<body id="home" class="homepage">
<?php require 'assets/navigasi_public.php'?>

<section id="meet-team">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Meet The Team</h2>
            <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <div class="team-img">
                        <img class="img-responsive" src="<?php echo base_url('assets/'); ?>images/team/01.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Bin Burhan</h3>
                        <span>Co-Founder</span>
                    </div>
                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                    <div class="team-img">
                        <img class="img-responsive" src="<?php echo base_url('assets/'); ?>images/team/02.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Jane Man</h3>
                        <span>Project Manager</span>
                    </div>
                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                    <div class="team-img">
                        <img class="img-responsive" src="<?php echo base_url('assets/'); ?>images/team/03.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Pahlwan</h3>
                        <span>Designer</span>
                    </div>
                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                    <div class="team-img">
                        <img class="img-responsive" src="<?php echo base_url('assets/'); ?>images/team/04.jpg" alt="">
                    </div>
                    <div class="team-info">
                        <h3>Nasir uddin</h3>
                        <span>UI/UX</span>
                    </div>
                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <div class="row">
            <div class="col-sm-4">
                <h3 class="column-title">Our Skills</h3>
                <strong>GRAPHIC DESIGN</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="85">85%</div>
                </div>
                <strong>WEB DESIGN</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="70">70%</div>
                </div>
                <strong>WORDPRESS DEVELOPMENT</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>
                </div>
                <strong>JOOMLA DEVELOPMENT</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="65">65%</div>
                </div>
            </div>

            <div class="col-sm-4">
                <h3 class="column-title">Our History</h3>
                <div role="tabpanel">
                    <ul class="nav main-tab nav-justified" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">2010</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">2011</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">2013</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab4" role="tab" data-toggle="tab" aria-controls="tab4" aria-expanded="false">2014</a>
                        </li>
                    </ul>
                    <div id="tab-content" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab4" aria-labelledby="tab3">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <h3 class="column-title">Faqs</h3>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Enim eiusmod high life accusamus
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Nihil anim keffiyeh helvetica
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Vegan excepteur butcher vice lomo
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!--/#meet-team-->


<?php require 'assets/footer.php'?>

<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/mousescroll.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/smoothscroll.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.isotope.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.inview.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>
</html>
