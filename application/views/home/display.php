<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Media Display Simdikonline.com</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="../plugins/morris/morris.css">
    <link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url()?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url()?>assets/css/styledisplay.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navigation Bar-->
        <!-- Navigation Bar-->
        <header id="topnav">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="page-title-box">
                        <img src="<?= base_url()?>assets\images\dikbud.png" alt="" class="logo-small float-left logosmk">
                        <!-- <h4 class="page-title">SMK AN-NUR</h4> -->
                        <div class="text-uppercase titlesmk">SMK AN-NUR</div>
                        <div class="titlesmk">Jl. Sultan Badarudin2 Parongpong Bandung Barat</div>
                        <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Komplek Taman Cihanjuang, Ds. Cihanjuang, Kec. Parongpong</li>
                        </ol> -->
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="page-title-box">
                        <!-- <h4 class="page-title ">Mesjid Al-Muiz</h4> -->
                        <div class="titletop">MEDIA DISPLAY SMK AN-NUR</div>
                    </div>
                </div>
            </div>
        </div><!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">

            </div><!-- end container-fluid -->
        </div><!-- end navbar-custom -->
    </header><!-- End Navigation Bar-->

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"
                                    data-interval="3000">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <img src="<?= base_url()?>assets/images/users/user-3.jpg" class="thumb-lg rounded-circle float-right" alt="">
                                        </div>
                                        <div class="text-white">
                                            <div class="clock2 text-uppercase"> Siswa Berprestasi</div>
                                            <!-- <h6 class="text-uppercase mb-3">Siswa Berprestasi</h6> -->
                                            <!-- <h4 class="mb-4">Anang Permana</h4> -->
                                            <div class="clock2 mb-4 mt-4">John Doe</div>
                                            <span class="badge badge-info"><i class="mdi mdi-trophy-outline"></i></span>
                                            <span class="ml-2">Juara 1 Lomba Makan</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <img src="<?= base_url()?>assets/images/users/user-1.jpg" class="thumb-lg rounded-circle float-right" alt="">
                                        </div>
                                        <div class="text-white">
                                            <!-- <h6 class="text-uppercase mb-3 clock2">Siswa Berprestasi</h6> -->
                                        <div class="clock2 text-uppercase"> Siswa Berprestasi</div>
                                        <div class="clock2 mb-4 mt-4">Jane Doe</div>
                                            <!-- <h4 class="mb-4">Naura Putri</h4> -->
                                            <span class="badge badge-info"><i class="mdi mdi-trophy-outline"></i></span>
                                            <span class="ml-2">Juara 1 LKS Jabar</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card m-b-20">
                        <div class="card-body">
                            <!-- <h4 class="mt-0 header-title mb-4 text-uppercase clock2">Event Sekolah</h4> -->
                            <div class="clock2 text-uppercase"> Event Sekolah</div>
                            <ol class="activity-feed mb-0">
                                <li class="feed-item">
                                    <div class="feed-item-list clock2">
                                        <span class="date">2 November 2019</span> 
                                        <span class="activity-text">Pekan Olahraga Dan Kreasi Seni Se Kabupaten Bandung Barat”</span>
                                    </div>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-item-list clock2"><span class="date">Jun 24</span> <span
                                            class="activity-text">Added an interest “Volunteer Activities”</span></div>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-item-list clock2"><span class="date">Jun 24</span> <span
                                            class="activity-text">Added an interest “Volunteer Activities” Added an interest “Volunteer Activities” Added an interest “Volunteer Activities”</span></div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card m-b-10">
                        <div class="card-body card-body2 spacex">
                        <!-- <h4 id="MyClockDisplay" class="mt-0 header-title">Responsive embed video 16:9</h4> -->
                        <!-- <marquee><p >Aspect ratios can be customized with modifier classes.</p></marquee> -->
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
<!-- 
                            <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/1y_kfWUCFDQ?&autoplay=1&controls=0&&showinfo=0&loop=1"></iframe> -->
                        <video autoplay="autoplay" loop="loop">
                        <source src="<?= base_url()?>assets/images/DreamWorks.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                        </video>
                        </div>
                    </div>
                    </div>
                <div class="row rownew">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body card-body2">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img class="d-block img-fluid" src="<?= base_url()?>assets\images\small\img-3.jpg" alt="First slide"></div>
                                    <div class="carousel-item"><img class="d-block img-fluid" src="<?= base_url()?>assets\images\small\img-5.jpg" alt="Second slide"></div>
                                    <div class="carousel-item"><img class="d-block img-fluid" src="<?= base_url()?>assets\images\small\img-7.jpg" alt="Third slide"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body card-body2">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img class="d-block img-fluid"
                                            src="<?= base_url()?>assets\images\small\img-3.jpg" alt="First slide"></div>
                                            <div class="carousel-item"><img class="d-block img-fluid" src="<?= base_url()?>assets\images\small\img-7.jpg" alt="Third slide"></div>
                                    <div class="carousel-item"><img class="d-block img-fluid" src="<?= base_url()?>assets\images\small\img-5.jpg" alt="Second slide"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
                <div class="col-xl-2">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="text-white">
                                <div id="MyClockDisplay" class="clock"></div>
                                <div id="MyClockDisplay2" class="clock2"></div>
                                <!-- <h4 id="MyClockDisplay" class="titlesmk">00:00:00</h4> -->
                                <!-- <span id="MyClockDisplay2" class="ml-2 "></span> -->
                            </div>
                        </div>
                    </div>
    <a class="weatherwidget-io" href="https://forecast7.com/en/n6d92107d62/bandung/" data-label_1="BANDUNG" data-label_2="WEATHER" data-font="Roboto" data-icons="Climacons Animated" data-mode="Current" data-days="3" data-theme="orange" >BANDUNG WEATHER</a>

                    <div class="card">
                        <div class="card-body card-body2">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="<?= base_url()?>assets\images\small\img-3.jpg" alt="First slide">
                                        <div class="card widget-user">
                                            <div class="widget-user-desc p-4 text-center bg-primary position-relative"><i
                                                    class="fas fa-quote-left h3 text-white-50"></i>
                                                <p class="text-white mb-0 font-20">The European languages are members of the same family. Their
                                                    separate existence is a myth.</p>
                                            </div>
                                            <div class="p-4">
                                                <div class="float-left mt-2 mr-3"><img src="<?= base_url()?>assets\images\users\user-2.jpg" alt=""
                                                        class="rounded-circle thumb-md"></div>
                                                <div class="font-16 mb-10">Marie Minnick</div>
                                            </div>
                                        </div>
                                </div>
                                    <div class="carousel-item">
                                    <img class="d-block img-fluid" src="<?= base_url()?>assets\images\small\img-5.jpg" alt="Second slide">
                                    <div class="card widget-user">
                                            <div class="widget-user-desc p-4 text-center bg-primary position-relative"><i
                                                    class="fas fa-quote-left h3 text-white-50"></i>
                                                <p class="text-white mb-0 font-20">The European languages are members of the same family. Their
                                                    separate existence is a myth.</p>
                                            </div>
                                            <div class="p-4">
                                                <div class="float-left mt-2 mr-3"><img src="<?= base_url()?>assets\images\users\user-2.jpg" alt=""
                                                        class="rounded-circle thumb-md"></div>
                                                <div class="font-16">Jane Doe</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                    <img class="d-block img-fluid" src="<?= base_url()?>assets\images\small\img-7.jpg" alt="Third slide">
                                    <div class="card widget-user">
                                            <div class="widget-user-desc p-4 text-center bg-primary position-relative"><i
                                                    class="fas fa-quote-left h3 text-white-50"></i>
                                                <p class="text-white mb-0 font-20">The European languages are members of the same family. Their
                                                    separate existence is a myth.</p>
                                            </div>
                                            <div class="p-4">
                                                <div class="float-left mt-2 mr-3"><img src="<?= base_url()?>assets\images\users\user-2.jpg" alt=""
                                                        class="rounded-circle thumb-md"></div>
                                                <div class="font-16">John Doe</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a class="weatherwidget-io" href="https://forecast7.com/en/n6d92107d62/bandung/" data-label_1="BANDUNG" data-label_2="WEATHER" data-font="Open Sans" data-icons="Climacons Animated" data-days="3" data-theme="original" ><div class="clock2">BANDUNG WEATHER</div></a> -->


                </div>
                

                <!-- <div class="col-xl-5 col-md-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon"><i class="mdi mdi-buffer float-right"></i></div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">Revenue</h6>
                                <h4 class="mb-4">$46,782</h4><span class="badge badge-danger">-29% </span><span
                                    class="ml-2">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon"><i class="mdi mdi-tag-text-outline float-right"></i></div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">Average Price</h6>
                                <h4 class="mb-4">$15.9</h4><span class="badge badge-warning">0% </span><span
                                    class="ml-2">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div> -->
            <!--end row-->

        </div><!-- end container-fluid -->

    </div><!-- end wrapper -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2">
                    <div class="infoterkini">
                    INFO TERKINI
                    </div>      
                </div>
                <div class="col-xl">
                    <div class="infoterkininews text-uppercase">
                    <marquee direction="left"  loop="infinite">
                                  	Diberitahukan kepada seluruh siswa agar hari senin menggunakan pakaian muslim untuk menyambut hari santri nasional 2019 <i class="mdi mdi-new-box"></i>
                                  	Diberitahukan kepada seluruh siswa agar hari senin menggunakan pakaian muslim untuk menyambut hari santri nasional 2019 <i class="mdi mdi-new-box"></i>
                                  </marquee>
                    </div>      
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- jQuery  -->
    <script src="<?= base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>assets/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url()?>assets/js/waves.min.js"></script>
    <script src="<?= base_url()?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Morris Chart-->
    <script src="<?= base_url()?>assets/plugins/morris/morris.min.js"></script>
    <script src="<?= base_url()?>assets/plugins/raphael/raphael-min.js"></script>
    <script src="<?= base_url()?>assets/pages/dashboard.js"></script><!-- App js -->
    <script src="<?= base_url()?>assets/js/app.js"></script>


    <script>
            function showTime(){
    var date = new Date();
    const days = ["AHAD", "SENIN", "SELASA", "RABU", "KAMIS", "JUM`AT", "SABTU"];
    const months = ["JAN", "FEB", "MAR","APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    var d = days[date.getDay()];
    var dd = date.getDate();
    var mo = months[date.getMonth()];
    var y = date.getFullYear();

    // if(h == 0){
    // h = 12;
    // }

    // if(h > 12){
    // h = h - 12;
    // session = "PM";
    // }

    h = (h < 10) ? "0" + h : h; 
    m=(m < 10) ? "0" + m : m;
    s=(s < 10) ? "0" + s : s;
    var time=h + ":" + m + ":" + s ;
    document.getElementById("MyClockDisplay").innerText=time;
    document.getElementById("MyClockDisplay").textContent=time;
    var time2=d + ", " +dd+" "+mo+" "+y;
    document.getElementById("MyClockDisplay2").innerText=time2;
    document.getElementById("MyClockDisplay2").textContent=time2;  
    setTimeout(showTime, 1000); } showTime();
    </script>
    
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</body>
</html>