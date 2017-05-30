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
                        <h3>Profil Sekolah</h3>
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
                                    <form class="form-horizontal form-label-left" action="<?php echo base_url('petugas/update_profil'); ?>" method="post">

                                        <!-- Nama Sekolah -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Sekolah</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Nama Sekolah" value="<?php echo $profil[0]->nama_sekolah; ?>" name="nama_sekolah">
                                            </div>
                                        </div>

                                        <!-- Jenjang Sekolah -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenjang</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="form-control" name="jenjang">
                                                    <option value="">Pilih jenjang pendidikan</option>
                                                    <option value="SD" <?php if ($profil[0]->jenjang == 'SD') echo 'selected="selected"'?>>SD</option>
                                                    <option value="MI" <?php if ($profil[0]->jenjang == 'MI') echo 'selected="selected"'?>>MI</option>
                                                    <option value="SMP" <?php if ($profil[0]->jenjang == 'SMP') echo 'selected="selected"'?>>SMP</option>
                                                    <option value="MTS" <?php if ($profil[0]->jenjang == 'MTS') echo 'selected="selected"'?>>MTS</option>
                                                    <option value="SMA" <?php if ($profil[0]->jenjang == 'SMA') echo 'selected="selected"'?>>SMA</option>
                                                    <option value="SMK" <?php if ($profil[0]->jenjang == 'SMK') echo 'selected="selected"'?>>SMK</option>
                                                    <option value="MA" <?php if ($profil[0]->jenjang == 'MA') echo 'selected="selected"'?>>MA</option>
                                                    <option value="SLB" <?php if ($profil[0]->jenjang == 'SLB') echo 'selected="selected"'?>>SLB</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- SK Pendirian -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">SK Pendirian</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="SK Pendirian" value="<?php echo $profil[0]->sk_pendirian; ?>" name="sk_pendirian">
                                            </div>
                                        </div>

                                        <!-- Tanggal Berdiri -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Berdiri</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                <input type="text" class="form-control" data-inputmask="'mask': '9999-99-99'" name="tgl_pendirian" value="<?php echo $profil[0]->tgl_pendirian; ?>">
                                                <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                        </div>

                                        <!-- Kabupaten -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kabupaten</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="form-control" name="kab">
                                                    <option value="">Pilih kabupaten</option>
                                                    <?php
                                                        foreach ($kabupaten as $i){?>
                                                            <option value="<?php echo $i->id; ?>" <?php if ($profil[0]->kab == $i->id) echo 'selected="selected"'?> ><?php echo $i->kabupaten; ?></option>
                                                        <?php }; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Kecamatan -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="form-control" name="kec">
                                                    <?php
                                                        foreach ($kecamatan as $i){ ?>
                                                            <option value="<?php echo $i->kode_kec; ?>" <?php if ($profil[0]->kec == $i->kode_kec) echo 'selected="selected"'?> ><?php echo $i->nama_kec; ?></option>
                                                        <?php }; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Kelurahan -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelurahan</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Kelurahan" value="<?php echo $profil[0]->kel; ?>" name="kel">
                                            </div>
                                        </div>

                                        <!-- Alamat -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control" rows="3" placeholder='Masukkan detail alamat...' name="alamat"><?php echo $profil[0]->alamat; ?></textarea>
                                            </div>
                                        </div>

                                        <!-- Nomer Telepon -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Telepon</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Telepon sekolah" value="<?php echo $profil[0]->telepon; ?>" name="telepon">
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Email sekolah" value="<?php echo $profil[0]->email; ?>" name="email">
                                            </div>
                                        </div>

                                        <!-- Website -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Website</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Website sekolah" value="<?php echo $profil[0]->web; ?>" name="web">
                                            </div>
                                        </div>

                                        <!-- Akreditasi -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Akreditasi</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Akreditasi sekolah" value="<?php echo $profil[0]->akreditasi; ?>" name="akreditasi">
                                            </div>
                                        </div>

                                        <!-- SK Akreditasi -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">SK Akreditasi</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="SK akreditasi sekolah" value="<?php echo $profil[0]->sk_akreditasi; ?>" name="sk_akreditasi">
                                            </div>
                                        </div>

                                        <!-- Kurikulum -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kurikulum</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Kurikulum sekolah" value="<?php echo $profil[0]->kurikulum; ?>" name="kurikulum">
                                            </div>
                                        </div>

                                        <!-- Visi -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Visi <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control" rows="5" placeholder='Visi sekolah...' name="visi"><?php echo $profil[0]->visi; ?></textarea>
                                            </div>
                                        </div>

                                        <!-- Misi -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Misi <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control" rows="12" placeholder='Misi sekolah...' name="misi"><?php echo $profil[0]->misi; ?></textarea>
                                            </div>
                                        </div>

                                        <!-- Tujuan -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tujuan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control" rows="5" placeholder='Tujuan sekolah...' name="tujuan"><?php echo $profil[0]->tujuan; ?></textarea>
                                            </div>
                                        </div>

                                        <!-- Moto -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Moto <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control" rows="5" placeholder='Moto sekolah...' name="moto"><?php echo $profil[0]->moto; ?></textarea>
                                            </div>
                                        </div>

                                        <!-- Listrik -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Listrik</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Listrik sekolah" value="<?php echo $profil[0]->listrik; ?>" name="listrik">
                                            </div>
                                        </div>

                                        <!-- Akses Internet -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Akses Internet</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Akses internet sekolah" value="<?php echo $profil[0]->akses_internet; ?>" name="akses_internet">
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