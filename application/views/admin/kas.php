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
                        <li class="has-submenu active"><a href="<?= base_url('admin/kas');?>"><i class="ti-wallet"></i>Kas</a></li>
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
                        <button type="button" class="btn btn-outline-success waves-effect waves-light float-right tambahKas" data-toggle="modal"
                data-target="#myModal">Tambah Kas</button>
                <button type="button" class="btn btn-info waves-effect waves-light"><strong>Saldo: Rp.<?= $saldo->balance?></strong></button>
                        <h4 class="mt-0 m-b-10 header-title"></h4>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="table-responsive">
                            
                            <table id="datatable-buttons"
                            class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Pemasukan</th>
                                        <th>Pengeluaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kas as $k) : ?>
                                    <tr>
                                        <td><?= $k->tanggal?></td>
                                        <td>Rp. <?= $k->pemasukan?></td>
                                        <td>Rp. <?= $k->pengeluaran?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>admin/editkas/<?= $k->id?>" class="editKas" data-toggle="modal" data-target="#myModal" data-id="<?= $k->id?>"><button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Ubah</button></a>
                                            <a href="<?= base_url(); ?>admin/deletekas/<?= $k->id?>" class="tombol-hapus" ><button type="button" class="btn btn-danger btn-sm waves-effect waves-light" >Hapus</button></a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end wrapper -->

       <!-- sample modal content -->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myModalLabel">Tambah Kas</h5>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <!-- <h6>Overflowing text to show scroll behavior</h6> -->
                        <form class="form-group" method="post" action="<?= base_url('admin/kas') ?>">
                        <input type="hidden" id="id" name="id">
                        <div class="form-group"><label>Tanggal</label>
                            <div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="tanggal" required="">
                                    <div class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label>Pemasukan</label> 
                            <input type="text" class="form-control" required="" id="pemasukan" name="pemasukan" placeholder="500000">
                        </div>
                        <div class="form-group"><label>Pengeluaran</label> 
                            <input type="text" class="form-control" required="" id="pengeluaran" name="pengeluaran" placeholder="500000">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Tambah Kas</button>
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
