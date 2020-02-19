
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
                        <li class="has-submenu active"><a href="<?= base_url('settings');?>"><i class="ti-panel"></i>Settings</a></li>
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
                            <h4 class="mt-0 header-title">Settings</h4>
                                                        <?= $this->session->flashdata('message'); ?>                        
                            <p class="text-muted m-b-30">Untuk form dibawah ini sesuaikan dengan keadaan di lokasi</p>
                                    <?php
                                        $mac = shell_exec('ifconfig eth0 |grep ether');
                                        $expl = explode(" ", $mac);
                                        //print_r ($expl[9]);

                                        //echo $expl[10];
                                        ?>

                            <form class="settings" method="post" action="<?= base_url('settings');?>">
                                <input class="form-control" type="hidden"  id="id" name="id" value="<?=$datadevice['id_device'];?>">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Key Device</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" readonly="readonly" type="text" value="<?php print_r($expl[9]); ?>"  id="keydevice" name="keydevice">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text"  id="name" name="name"
                                        value="<?=$datadevice['name'];?>">
                                        <small class="text-danger"> <?= form_error('name'); ?> </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Ip Public</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text"  id="ippublic" name="ippublic"
                                        value="<?=$datadevice['ip_public'];?>">
                                        <small class="text-danger"> <?= form_error('ippublic'); ?> </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Ip Local</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text"  id="iplocal" name="iplocal"
                                        value="<?=$datadevice['ip_local'];?>">
                                        <small class="text-danger"> <?= form_error('iplocal'); ?> </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Location</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text"  id="location" name="location"
                                        value="<?=$datadevice['location'];?>">
                                        <small class="text-danger"> <?= form_error('location'); ?> </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Latitude</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text"  id="latitude" name="latitude"
                                        value="<?=$datadevice['latitude'];?>">
                                        <small class="text-danger"> <?= form_error('latitude'); ?> </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Longitude</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text"  id="longitude" name="longitude"
                                        value="<?=$datadevice['longitude'];?>">
                                        <small class="text-danger"> <?= form_error('longitude'); ?> </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">kontak</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text"  id="kontak" name="kontak"
                                        value="<?=$datadevice['kontak'];?>">
                                        <small class="text-danger"> <?= form_error('kontak'); ?> </small> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">No Handphone</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text"  id="nohp" name="nohp"
                                        value="<?=$datadevice['no_hp'];?>">
                                        <small class="text-danger"> <?= form_error('nohp'); ?> </small> 
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">Update</button>
                                        <a href="<?= base_url('settings'); ?>" type="reset" class="btn btn-secondary waves-effect">Cancel</a>
                                    </div>
                                </div>
                                </form>
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
