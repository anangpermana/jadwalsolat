
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
                        <li class="has-submenu active"><a href="<?= base_url('camera');?>"><i class="ti-video-camera"></i>Camera</a></li>
                        <li class="has-submenu"><a href="<?= base_url('filerecord');?>"><i class="ti-video-clapper"></i>File Record</a></li>
                        <li class="has-submenu"><a href="<?= base_url('live');?>"><i class="ti-desktop"></i>Live Stream</a></li>
                        <li class="has-submenu"><a href="<?= base_url('settings');?>"><i class="ti-panel"></i>Settings</a></li>
                        <li class="has-submenu"><a href="<?= base_url('user');?>"><i class="ti-user"></i>Profile</a></li>
                    </ul><!-- End navigation menu -->
                </div><!-- end navigation -->
            </div><!-- end container-fluid -->
        </div><!-- end navbar-custom -->
    </header><!-- End Navigation Bar-->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Camera Detail</h4>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row"><h6>Camera Name</h6></th>
                                            <td><?=$datacctv['name'];?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h6>IP Address</h6></th>
                                            <td><?=$datacctv['ipaddress'];?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h6>User</h6></th>
                                            <td><?=$datacctv['user_cctv'];?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h6>Password</h6></th>
                                            <td><?=$datacctv['pass_cctv'];?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h6>File Record Location</h6></th>
                                            <td><?=$datacctv['file_location'];?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h6>Status</h6></th>
                                            <?php if ($datacctv['status'] == 200) : ?>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Online</td>
                                            <?php else : ?>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Online</td>
                                            <?php endif;?>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h6>Vendor</h6></th>
                                            <td><?=$datacctv['vendor'];?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Live Streaming</h4>
                            <!-- <p class="text-muted m-b-30">Aspect ratios can be customized with modifier classes.</p> -->
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item"
                                    src="<?=$datacctv['url_stream'];?>"></iframe></div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end wrapper -->