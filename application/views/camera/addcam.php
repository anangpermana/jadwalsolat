
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
                <div class="col-xl-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <!-- <a href="<?= base_url('camera/add'); ?>" type="button" class="btn btn-primary btn-sm waves-effect waves-light float-right " >Add Camera</a> -->
                            <h4 class="mt-0 m-b-30 header-title">List Camera</h4>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="table-responsive">
                                <table class="table table-vertical table-hover">
                                    <tbody>
                                        <?php foreach ($datacctv as $dc) : ?>
                                        <tr>
                                            <td><?= $dc['name']; ?></td>
                                            <?php if ($dc['status']==200) :?>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Online</td>
                                            <?php else :?>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Ofline</td>
                                            <?php endif;?>
                                            <td><?= $dc['ipaddress'];?><p class="m-0 text-muted font-14">IP</p>
                                            </td>
                                            <td><?= $dc['vendor'];?><p class="m-0 text-muted font-14">Vendor</p>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Add Camera</h4>                        
                            <p class="text-muted m-b-30"></p>
                            <form class="camera" method="post" action="<?= base_url('camera/add') ?>">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="" placeholder="Camera 1" id="name" name="name">
                                        <small class="text-danger"> <?= form_error('name'); ?> </small> 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Ip Adress</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="ipaddress" name="ipaddress">
                                        <small class="text-danger"> <?= form_error('ipaddress'); ?> </small> 
                                        <span class="font-8 text-muted">ex: 192.168.110.210</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">URL Capture</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="urlcapture" name="urlcapture">
                                        <small class="text-danger"> <?= form_error('urlcapture'); ?> </small>
                                        <span class="font-8 text-muted">ex: /ISAPI/Streaming/channels/101/picture</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-url-input" class="col-sm-2 col-form-label">URL Stream</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="url" id="urlstream" name="urlstream">
                                            <small class="text-danger"> <?= form_error('urlstream'); ?> </small>
                                            <span class="font-8 text-muted">ex: http://192.168.88.250:8080/ws.html?token1</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label">User</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="admin" id="user" name="user">
                                        <small class="text-danger"> <?= form_error('user'); ?> </small> 
                                    </div>
                                </div>
                                <div class="form-group row"><label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" id="password" name="password">
                                        <small class="text-danger"> <?= form_error('password'); ?> </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label">File Location</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="filelocation" name="filelocation">
                                        <small class="text-danger"> <?= form_error('filelocation'); ?> </small>
                                        <span class="font-8 text-muted">ex: /mnt/record/cam1</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label">Vendor</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Hikvision" id="vendor" name="vendor">
                                        <small class="text-danger"> <?= form_error('vendor'); ?> </small> 
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Add</button>
                                        <a href="<?= base_url('camera'); ?>" type="reset" class="btn btn-secondary waves-effect">Cancel</a>
                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end wrapper -->