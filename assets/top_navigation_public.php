<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: mangrove
 * Date: 5/31/2017
 * Time: 2:57 PM
 */
?>
<div class="top_nav">
    <div class="nav_menu">
        <?php
        if($this->session->userdata('level') === '1'){?>
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo base_url('assets'); ?>/images/img.jpg" alt="">Hallo, <?php echo $this->session->userdata('Nama'); ?>
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="<?php echo base_url('admin/profil'); ?>"> Profil</a></li>
                            <li>
                                <a href="<?php echo base_url('admin/pengaturan'); ?>">
                                    <span>Pengaturan</span>
                                </a>
                            </li>
                            <li><a href="<?php echo base_url('admin/bantuan'); ?>">Bantuan</a></li>
                            <li><a href="<?php echo base_url('admin/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        <?php } elseif ($this->session->userdata('level') === '0'){ ?>
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo base_url('assets'); ?>/images/img.jpg" alt="">Hallo, <?php echo $this->session->userdata('Nama'); ?>
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="<?php echo base_url('petugas/profil'); ?>"> Profil</a></li>
                            <li>
                                <a href="<?php echo base_url('petugas/pengaturan'); ?>">
                                    <span>Pengaturan</span>
                                </a>
                            </li>
                            <li><a href="<?php echo base_url('petugas/bantuan'); ?>">Bantuan</a></li>
                            <li><a href="<?php echo base_url('petugas/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        <?php } else {?>
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="<?php echo base_url('login'); ?>" class="user-profile dropdown-toggle" aria-expanded="false">
                            <span class="fa fa-sign-in"></span>
                            <span>Login</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php }
        ?>

    </div>
</div>