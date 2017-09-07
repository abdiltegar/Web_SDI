<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}">
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/jquery-3.2.1.min.js') }}"></script>
        <script>
        <?php date_default_timezone_set('Asia/Jakarta'); ?>
  //buat object date berdasarkan waktu di server
  var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
  //buat object date berdasarkan waktu di client
  var clientTime = new Date();
  //hitung selisih
  var Diff = serverTime.getTime() - clientTime.getTime();
  //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
  function displayServerTime(){
      //buat object date berdasarkan waktu di client
      var clientTime = new Date();
      //buat object date dengan menghitung selisih waktu client dan server
      var time = new Date(clientTime.getTime() + Diff);
      //ambil nilai jam
      var sh = time.getHours().toString();
      //ambil nilai menit
      var sm = time.getMinutes().toString();
      //ambil nilai detik
      var ss = time.getSeconds().toString();
      //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
      document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
  }
</script>
    </head>
    <body onload="setInterval('displayServerTime()', 1000);">

      <center>
        <div class="wrap ">
          <div class="jam jam-hijau"><?php echo date("D, d-F-Y")." &nbsp | server time " ?><span id="clock"><?php print date('H:i:s'); ?></span></div>
          <br>
            <ul class="menu menu-hijau header-hijau" style="margin-bottom:0px;">
              <a href="#" style="float:left;"><li><h5>Admin Page Menu</h5></li></a>
              <a href="#" style="float:right;" id="profil-menu"><li ><span><i class="fa fa-user"></i></span> Profil
                <ul id="profil-menu-isi" class="dropdown-menu" style="color:green;float:left;">
                  coba
                  <li style="color:green;">coba coba</li>
                </ul>
              </li></a>
              <script>
              $(document).ready(function(){
                $("#profil-menu").click(function(){
                  $("#profil-menu-isi").css({"display": "block"});
                });
              });
              </script>
              <a href="{{ url('/admin-berita') }}" style="float:right;"><li ><span><i class="fa fa-globe"></i></span> Baru</li></a>
              <a href="{{ url('/') }}" style="float:right;"><li ><span><i class="fa fa-globe"></i></span> Lihat Web</li></a>
            </ul>
            <div class="menu-admin-hijau col-sm-3" style="padding:0px;">
              <ul style="padding:0px;">
                <a href="#" style="text-decoration:none;"><li class="menu-admin-link menu-admin-link-hijau">Dashboard</li></a>
                <a href="#" style="text-decoration:none;"><li class="menu-admin-link menu-admin-link-hijau">Profil Sekolah</li></a>
                <a href="#" style="text-decoration:none;"><li class="menu-admin-link menu-admin-link-hijau">Berita</li></a>
                <a href="#" style="text-decoration:none;"><li class="menu-admin-link menu-admin-link-hijau">Pengumuman</li></a>
              </ul>
            </div>
            <div class="col-sm-9 container content">
              content
            </div>
            <div class="col-sm-12 footer-hijau">
              &copy; 2017 copyright SDI. All Rights reserved.
              <p style="float:right;">Develop by. Abdil Tegar Arifin - Design by. Abdil Tegar Arifin</p>
            </div>
        </div>
      </center>
    </body>
</html>
