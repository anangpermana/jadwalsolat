
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
                        <li class="has-submenu active"><a href="<?= base_url('filerecord');?>"><i class="ti-video-clapper"></i>File Record</a></li>
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
                <div class="col-xl">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">List File Record</h4>
                            <p class="text-muted m-b-30"></p>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>File Name</th>
                                        <th>Date</th>
                                        <th>Size</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($file as $f) : ?>
                                <?php
                                $size= $f['size'] / 1048576;
                                $prev = explode(".", $f['file_name']);
                                // var_dump($prev[0]);
                                ?>
                                    <tr>
                                        <td><?=$f['file_name'];?></td>
                                        <td><?=$f['date'];?></td>
                                        <td><?=$size;?> MB</td>
                                        <td>
                                                <a href="<?=base_url();?><?=$f['file_location'];?><?=$prev[0];?>_prev.mp4" type="button"class="btn btn-secondary btn-sm waves-effect waves-light">Preview</a>
                                        </td>
                                        <td>
                                                <a href="<?=base_url();?><?=$f['file_location'];?><?=$f['file_name'];?>" type="button"class="btn btn-secondary btn-sm waves-effect waves-light" download>Download</a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        <!-- <div class="card-body">
                            <h4 class="mt-0 m-b-30 header-title">Latest Orders</h4>
                            <div class="table-responsive">
                                <table class="table table-vertical mb-1">
                                    <tbody>
                                    <?php foreach ($file as $f) : ?>
                                        <tr>
                                            <td>#12354781</td>
                                            <td><?=$f['file_name'];?></td>
                                            <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                            <td>$185</td>
                                            <td>5/12/2016</td>
                                            <td>
                                                <a href="<?=base_url();?><?=$f['file_location'];?><?=$f['file_name'];?>" type="button"class="btn btn-secondary btn-sm waves-effect waves-light" download>Download</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end wrapper -->