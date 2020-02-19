<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Dipantau Raspi - <?= $title; ?></title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.png">
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center m-0">
                    <a href="index.html" class="logo logo-admin">
                        <!-- <img src="<?= base_url(); ?>assets/images/logo.png" height="55" alt="logo"> -->
                    </a>
                </h3>
                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                    <p class="text-muted text-center">Sign in</p>
                    <?= $this->session->flashdata('message'); ?>
                    <form class="form-horizontal m-t-30" method="post" action="<?= base_url('login'); ?>">
                        <div class="form-group">
                        <label for="username">Username</label> 
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="userpassword">Password</label> 
                            <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Enter password"></div>
                            <?= form_error('userpassword', '<small class="text-danger pl-3">', '</small>'); ?>

                        <div class="form-group row m-t-20">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <!-- <input type="checkbox" class="custom-control-input" id="customControlInline"> 
                                        <label class="custom-control-label" for="customControlInline">Remember me</label> -->
                                    </div>
                            </div>
                            <div class="col-6 text-right"><button class="btn btn-primary w-md waves-effect waves-light"
                                    type="submit">Log In</button></div>
                        </div>
                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20"><a href="<?=base_url('login/forgotpassword');?>" class="text-muted"><i
                                        class="mdi mdi-lock"></i> Forgot your password?</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="m-t-40 text-center">
            <p>© 2018 - 2019 Lexa. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
        </div> -->
    </div><!-- jQuery  -->
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url(); ?>assets/js/waves.min.js"></script>
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- App js -->
    <script src="<?= base_url(); ?>assets/js/app.js"></script>
</body>

</html>