

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <!-- <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Welcome to Lexa Dashboard</li>
                        </ol> -->
                    </div>
                </div>
            </div>
        </div><!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu  active"><a href="<?= base_url('admin'); ?>"><i class="ti-dashboard"></i>
                                <span>Dashboard</span></a></li>
                        <li class="has-submenu"><a href="<?= base_url('admin/kas');?>"><i class="ti-wallet"></i>Kas</a></li>
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
                <div class="col-xl-6 col-md-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body">
                            <div class="text-white">
                                <h5 class="text-uppercase mb-3">dipantaumangosky device</h5>
                                <p class="mb-4">untuk instalasi pertama silahkan update data settings terlebih dahulu, sesuaikan dengan kondisi yang ada di lokasi</p>
                                <a href="<?=base_url('settings'); ?>" type="submit" class="btn btn-info waves-effect waves-light mr-1">Settings</a>
                                <!-- <span class="badge badge-info">-</span> -->
                                <!-- <span class="ml-2">From previous period</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon"><i class="mdi mdi-camera float-right"></i></div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">Camera</h6>
                                <h4 class="mb-4"><?=$jmlcam['jmlc'];?></h4>
                                <!-- <span class="badge badge-info">-</span> -->
                                <!-- <span class="ml-2">From previous period</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon"><i class="mdi mdi-file-video float-right"></i></div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">File Record</h6>
                                <h4 class="mb-4"><?=$jmlf['jmlf'];?></h4>
                                <!-- <span class="badge badge-danger">-</span> -->
                                <!-- <span class="ml-2">From previous period</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end wrapper -->
