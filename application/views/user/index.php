

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                    </div>
                </div>
            </div>
        </div><!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu"><a href="<?= base_url('admin'); ?>"><i class="ti-dashboard"></i>
                                <span>Dashboard</span></a></li>
                        <li class="has-submenu"><a href="<?= base_url('camera');?>"><i class="ti-video-camera"></i>Camera</a></li>
                        <li class="has-submenu"><a href="<?= base_url('filerecord');?>"><i class="ti-video-clapper"></i>File Record</a></li>
                        <li class="has-submenu"><a href="<?= base_url('live');?>"><i class="ti-desktop"></i>Live Stream</a></li>
                        <li class="has-submenu"><a href="<?= base_url('settings');?>"><i class="ti-panel"></i>Settings</a></li>
                        <li class="has-submenu active"><a href="<?= base_url('user');?>"><i class="ti-user"></i>Profile</a></li>
                    </ul><!-- End navigation menu -->
                </div><!-- end navigation -->
            </div><!-- end container-fluid -->
        </div><!-- end navbar-custom -->
    </header><!-- End Navigation Bar-->
    <div class="wrapper">
        <div class="container-fluid">
        <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card directory-card m-b-20">
                        <div>
                            <div class="directory-bg text-center">
                                <div class="directory-overlay"><img class="rounded-circle thumb-lg img-thumbnail"
                                        src="<?php base_url();?>/assets/images/profile/<?=$userd['image']; ?>" alt="Generic placeholder image"></div>
                            </div>
                            <div class="directory-content text-center p-4">
                                <p class="mt-4"><?= $userd['email']; ?></p>
                                <h5 class="font-16"><?= $userd['name']; ?></h5>
                                <ul class="social-links list-inline mb-0 mt-4">
                                </ul>
                                <a href="<?= base_url('user/editprofile'); ?>" type="button" class="btn btn-info waves-effect waves-light">Edit Profile</a>
                                <a href="<?= base_url('user/changepassword'); ?>" type="button" class="btn btn-info waves-effect waves-light">Change Password</a>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end wrapper -->
