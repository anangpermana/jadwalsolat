

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
                                        src="<?= base_url();?>assets/images/profile/<?=$user['image'];?>" alt="Generic placeholder image"></div>
                            </div>
                            <div class="directory-content text-center p-4">
                                <p class="mt-4"><?= $userd['email']; ?></p>
                                <h5 class="font-16"><?= $userd['name']; ?></h5>
                                <ul class="social-links list-inline mb-0 mt-4">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-8">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Change Password</h4>
                            <p class="text-muted m-b-30"></p>
                            <?= $this->session->flashdata('message'); ?> 
                            <form class="" action="<?= base_url('user/changepassword'); ?>" method="post">
                                <div class="form-group">
                                    <label>Current Password</label> 
                                    <input type="password" class="form-control" name="current_pass" id="current_pass" placeholder="Current Password">
                                    <?= form_error('current_pass', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <div>
                                        <input type="password" name="new_pass1" id="new_pass1" class="form-control" placeholder="Password">
                                        <?= form_error('new_pass1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="m-t-10">
                                        <input type="password" name="new_pass2" id="new_pass2" class="form-control" data-parsley-equalto="#pass2" placeholder="Confirm Password">
                                        <?= form_error('new_pass2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div><button type="submit"
                                            class="btn btn-primary waves-effect waves-light mr-1">Change Password</button>
                                        <a href="<?=base_url('user')?>" type="reset" class="btn btn-secondary waves-effect">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end wrapper -->
