<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title><?= $title; ?></title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.png">
        <!-- DataTables -->
    <link href="<?= base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Plugins css -->
    <link href="<?= base_url();?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url();?>assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
</head>

    <body>
    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">
                <!-- Logo container-->
                <div class="logo"><a href="<?=base_url();?>" class="logo"><img src="<?=base_url();?>assets/images/logo-sm.png" alt=""
                            class="logo-small"> <img src="<?=base_url();?>assets/images/logo.png" alt="" class="logo-large"></a></div>
                <!-- End Logo container-->
                <div class="menu-extras topbar-custom">
                    <ul class="float-right list-unstyled mb-0">
                        <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user"
                                    data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false"><?= $user['name']; ?> <span class="d-none d-md-inline-block ml-1"><i
                                            class="mdi mdi-chevron-down"></i></span><img src="<?php base_url();?>/assets/images/profile/<?=$user['image']; ?>" alt="user"
                                        class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                    <!-- item--> 
                                    <a class="dropdown-item" href="<?= base_url('user'); ?>"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a> 
                                    <a class="dropdown-item" href="<?= base_url('user/editprofile'); ?>"><i class="mdi mdi-settings m-r-5"></i> Edit Profile</a> 
                                    <a class="dropdown-item" href="<?= base_url('user/changepassword'); ?>"><i class="mdi mdi-lock-open-outline m-r-5"></i> Change Password</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="<?= base_url('login/exit'); ?>"><i
                                            class="mdi mdi-power text-danger"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item">
                            <!-- Mobile menu toggle--> <a class="navbar-toggle nav-link" id="mobileToggle">
                                <div class="lines"><span></span> <span></span> <span></span></div>
                            </a><!-- End mobile menu toggle-->
                        </li>
                    </ul>
                </div><!-- end menu-extras -->
                <div class="clearfix"></div>
            </div><!-- end container -->
        </div><!-- end topbar-main -->