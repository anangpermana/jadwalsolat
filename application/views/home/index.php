<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <link rel="stylesheet" href="../plugins/morris/morris.css">
    <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
    <link href="assets\css\style2.css" rel="stylesheet" type="text/css">
    <link href="assets\css\clock.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="assets/js/PrayTimes.js"></script>
</head>

<body>
    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <img src="assets\images\mosque.png" alt="" class="logo-small float-left">
                        <h4 class="page-title">Mesjid Al-Muiz</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Komplek Taman Cihanjuang, Ds. Cihanjuang, Kec. Parongpong</li>
                        </ol>
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
                <div class="col-xl-6 col-md-6">
                    <div class="card mini-stat bg-info">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon"><i class="mdi mdi-timetable float-right"></i></div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">waktu</h6>
                                <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div id="iqomahh">
                    <div id="iqomahh" class="card mini-stat bg-info">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon"><i class="mdi mdi mdi-timer float-right"></i></div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">jeda iqomah</h6>
                                <h1 class="clock mb-5">00:00</h1>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div><!-- end row -->
            <div class="row" id="solat" onload="showJadwal()">
                <!-- <div class="col-xl-4 col-md-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon"><i class="mdi mdi-cube-outline float-right"></i></div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">Orders</h6>
                                <h4 class="mb-4">1,587</h4><span class="badge badge-info">+11% </span><span
                                    class="ml-2">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
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
                <div class="col-xl-4 col-md-6">
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
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon"><i class="mdi mdi-briefcase-check float-right"></i></div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3">Product Sold</h6>
                                <h4 class="mb-4">1890</h4><span class="badge badge-info">+89% </span><span
                                    class="ml-2">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 m-b-10 header-title">Laporan Kas Mesjid Al-Muiz</h4>
                            <button type="button" class="btn btn-info waves-effect waves-light"><strong>Saldo : Rp. <?= $saldo->balance?></strong></button>
                            <h4 class="mt-0 m-b-5 header-title"></h4>

                            <div class="table-responsive">
                                <table class="table table-vertical">
                                    <tbody>
                                        <tr>
                                            <td>Tanggal<p class="m-0 text-muted font-14">April</p></td>
                                            <td>Pemasukan<p class="m-0 text-muted font-14">$14,584</p></td>
                                            <td>Pengeluaran<p class="m-0 text-muted font-14">$14,584</p></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal<p class="m-0 text-muted font-14">April</p></td>
                                            <td>Pemasukan<p class="m-0 text-muted font-14">$14,584</p></td>
                                            <td>Pengeluaran<p class="m-0 text-muted font-14">$14,584</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 m-b-30 header-title">Petugas Sholat Jum'at</h4>
                            <div class="table-responsive">
                                <table class="table table-vertical">
                                    <tbody>
                                        <tr>
                                            <td>Tanggal<p class="m-0 text-muted font-14">12/07/2019</p></td>
                                            <td>Khotib<p class="m-0 text-muted font-14">KH. Abdul Fatah</p></td>
                                            <td>Muadzin<p class="m-0 text-muted font-14">M. Arsyad</p></td>
                                            <td>Muroqi<p class="m-0 text-muted font-14">Deni</p></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal<p class="m-0 text-muted font-14">19/07/2019</p></td>
                                            <td>Khotib<p class="m-0 text-muted font-14">KH. Abdul Manan</p></td>
                                            <td>Muadzin<p class="m-0 text-muted font-14">Supardi</p></td>
                                            <td>Muroqi<p class="m-0 text-muted font-14">Agung Mulyadi</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div><!-- end container-fluid -->
    </div><!-- end wrapper -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">© 2019 Hamba Allah <span class="d-none d-sm-inline-block">- Crafted with <i
                            class="mdi mdi-heart text-danger"></i></span>.</div>
            </div>
        </div>
    </footer><!-- End Footer -->
    <div id="test" class="row">
                                                                                                                                               </div>
    </div>
    <!-- jQuery  -->
    <script src="assets\js\jquery.min.js"></script>
    <script src="assets\js\bootstrap.bundle.min.js"></script>
    <script src="assets\js\jquery.slimscroll.js"></script>
    <script src="assets\js\waves.min.js"></script>
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael-min.js"></script>
    <script src="assets\pages\dashboard.js"></script><!-- App js -->
    <script src="assets\js\app.js"></script>


    <script type="text/javascript">
        setInterval(function(){
            location.reload();   
        }, 21600000);
        var date = new Date(); // today
        var kemarin = new Date(Date.now() - 864e5);
        // const days = ["AHAD", "SENIN", "SELASA", "RABU", "KAMIS", "JUM`AT", "SABTU"];
        const months = ["Jan", "Feb", "Mar","Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        // var newdate = date.getHours() +":"+date.getMinutes() +" "+days[date.getDay()] + "  " + date.getDate() + "-" + months[date.getMonth()] + "-" + date.getFullYear();

        var newdate = date.getDate() + "-" + months[date.getMonth()] + "-" + date.getFullYear();
        var kem = kemarin.getDate() + "-" + months[kemarin.getMonth()] + "-" + kemarin.getFullYear();
        var h = date.getHours(); // 0 - 23
        var m = date.getMinutes(); // 0 - 59
        h = (h < 10) ? "0" + h : h; 
        m=(m < 10) ? "0" + m : m;
        var hm=h + ":" + m ;

        prayTimes.tune({
            imsak: 3,
            fajr: 3,
            dhuhr: 6,
            asr: 3,
            maghrib: 4
        });
        var times = prayTimes.getTimes(date, [-6.821282, 107.580103], +7);
        var list = ['Imsak', 'Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];

        var htmll = '';
        for ( var i in list) {
            htmll += ' <div class="col-xl-4 col-md-6">\
            	<div id="'+list[i]+'" class="card mini-stat bg-primary">\
            		<div class="card-body mini-stat-img">\
            			<div class="mini-stat-icon"><img src="../assets/images/64/' + list[i] + '.gif" alt="" class="float-right logo-small">\
            			</div>\
            			<div class="text-white">\
            				<h2 class="mb-3">' + list[i] + '</h2>\
            				<h3 class="mb-4 clock">' + times[list[i].toLowerCase()] + '</h3>\
            			</div>\
            		</div>\
            	</div>\
            </div>';

            document.getElementById('solat').innerHTML = htmll;
            
        }
        setInterval(() => {

            $.ajax({
                url: 'http://192.168.0.102/home/jadwal',
                type: 'POST',
                data: {namasolat:times,waktu:newdate,kemarin:kem}
            });
        }, 3600000);

       
        
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
    var time=d + ", " +dd+" "+mo+" "+y+" "+h + ":" + m + ":" + s ;
    document.getElementById("MyClockDisplay").innerText=time;
    document.getElementById("MyClockDisplay").textContent=time; 
    setTimeout(showTime, 1000); } showTime();

    function showIqomah()
{

    // Set the date we're counting down to
    var d1 = new Date (),
    d2 = new Date ( d1 );
    d2.setMinutes ( d1.getMinutes() + 3 );

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();
        
    // Find the distance between now and the count down date
    var distance = d2 - now;
        
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    hours=(hours < 10) ? "0" + hours : hours; 
    minutes=(minutes < 10) ? "0" + minutes : minutes;
    seconds=(seconds < 10) ? "0" + seconds : seconds;
        
    // Output the result in an element with id="demo"
    var tes = '';
                tes += '<div class="card mini-stat bg-danger">\
                            <div class="card-body mini-stat-img">\
                                <div class="mini-stat-icon"><i class="mdi mdi mdi-timer float-right"></i></div>\
                                <div class="text-white">\
                                    <h6 class="text-uppercase mb-3">jeda iqomah</h6>\
                                    <h1 class="clock mb-5">'+minutes+ ":" +seconds+'</h1>\
                                </div>\
                            </div>\
                        </div>';
    document.getElementById("iqomahh").innerHTML = tes;
        
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        location.reload();

    }
    }, 1000);
}


setInterval(() => {
    var date = new Date(); // today
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    h = (h < 10) ? "0" + h : h; 
    m = (m < 10) ? "0" + m : m;
    var hm=h + ":" + m ;
        $.ajax({
            url: 'http://192.168.0.102/home/iqomah',
            type: 'get',
            dataType: 'json',
            success: function(data){
                if ( hm === data.asr){
                    showIqomah()
                }else if(hm === data.dhuhr){
                    showIqomah()
                }else if(hm === data.fajr){
                    showIqomah()                    
                }else if(hm === data.isha){
                    showIqomah()
                }else if(hm === data.maghrib){
                    showIqomah()
                }else {
                    console.log(hm)
                }
            }
        })
    }, 10000);
    
    </script>


    <script>



    </script>
    
</body>

</html>