
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
                        <li class="has-submenu"><a href="<?= base_url('admin'); ?>"><i class="ti-dashboard"></i>
                                <span>Dashboard</span></a></li>
                        <li class="has-submenu  active"><a href="<?= base_url('camera');?>"><i class="ti-video-camera"></i>Camera</a></li>
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
                <div class="col-xl">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <a href="<?= base_url('camera/add'); ?>" type="button" class="btn btn-primary btn-sm waves-effect waves-light float-right " >Add Camera</a>
                            <h4 class="mt-0 m-b-30 header-title">List Camera</h4>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="table-responsive">
                                <table class="table table-vertical table-hover">
                                    <tbody>
                                        <?php foreach ($datacctv as $dc) : ?>
                                        <tr>
                                            <td><img src="assets\images\users\cctv.png" alt="user-image"
                                                    class="thumb-sm rounded-circle mr-2"><?= $dc['name']; ?></td>
                                            <?php if ($dc['status']==200) :?>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Online</td>
                                            <?php else :?>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Ofline</td>
                                            <?php endif;?>
                                            <td><?= $dc['ipaddress'];?><p class="m-0 text-muted font-14">IP</p>
                                            </td>
                                            <td><?= $dc['vendor'];?><p class="m-0 text-muted font-14">Vendor</p>
                                            </td>
                                            <td>
                                            <a href="<?= base_url(); ?>camera/detail/<?=$dc['id']?>" type="button" class="btn btn-info btn-sm waves-effect waves-light">Detail</a>
                                            <a href="<?= base_url(); ?>camera/edit/<?=$dc['id'] ?>" type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</a>
                                            <a href="<?= base_url(); ?>camera/delete/<?=$dc['id'] ?>" type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="return confirm('yakin?');">Delete</a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 m-b-30 header-title">Latest Orders</h4>
                            <div class="table-responsive">
                                <table class="table table-vertical mb-1">
                                    <tbody>
                                        <tr>
                                            <td>#12354781</td>
                                            <td><img src="assets\images\users\user-1.jpg" alt="user-image"
                                                    class="thumb-sm mr-2 rounded-circle"> Riverston Glass Chair</td>
                                            <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                            <td>$185</td> 
                                            <td>5/12/2016</td>
                                            <td><button type="button"
                                                    class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#52140300</td>
                                            <td><img src="assets\images\users\user-2.jpg" alt="user-image"
                                                    class="thumb-sm mr-2 rounded-circle"> Shine Company Catalina</td>
                                            <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                            <td>$1,024</td>
                                            <td>5/12/2016</td>
                                            <td><button type="button"
                                                    class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#96254137</td>
                                            <td><img src="assets\images\users\user-3.jpg" alt="user-image"
                                                    class="thumb-sm mr-2 rounded-circle"> Trex Outdoor Furniture Cape
                                            </td>
                                            <td><span class="badge badge-pill badge-danger">Cancel</span></td>
                                            <td>$657</td>
                                            <td>5/12/2016</td>
                                            <td><button type="button"
                                                    class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#12365474</td>
                                            <td><img src="assets\images\users\user-4.jpg" alt="user-image"
                                                    class="thumb-sm mr-2 rounded-circle"> Oasis Bathroom Teak Corner
                                            </td>
                                            <td><span class="badge badge-pill badge-warning">Shipped</span></td>
                                            <td>$8451</td>
                                            <td>5/12/2016</td>
                                            <td><button type="button"
                                                    class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#85214796</td>
                                            <td><img src="assets\images\users\user-5.jpg" alt="user-image"
                                                    class="thumb-sm mr-2 rounded-circle"> BeoPlay Speaker</td>
                                            <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                            <td>$584</td>
                                            <td>5/12/2016</td>
                                            <td><button type="button"
                                                    class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#12354781</td>
                                            <td><img src="assets\images\users\user-6.jpg" alt="user-image"
                                                    class="thumb-sm mr-2 rounded-circle"> Riverston Glass Chair</td>
                                            <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                            <td>$185</td>
                                            <td>5/12/2016</td>
                                            <td><button type="button"
                                                    class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end wrapper -->