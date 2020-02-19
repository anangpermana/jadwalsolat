
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="state-information">
                        </div>
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
                        <li class="has-submenu active"><a href="<?= base_url('live');?>"><i class="ti-desktop"></i>Live Stream</a></li>
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
            <?php foreach ($datacctv as $dctv) : ?>
                <div class="col-lg-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title"><?=$dctv['name']; ?> | <?=$dctv['ipaddress']; ?></h4>
                            <p class="text-muted m-b-30">Vendor = <?=$dctv['vendor']; ?>.</p>
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item"
                                    src="<?=$dctv['url_stream']; ?>"></iframe></div>
                        </div>
                    </div>
                </div><!-- end col -->
            <?php endforeach; ?>
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end wrapper -->