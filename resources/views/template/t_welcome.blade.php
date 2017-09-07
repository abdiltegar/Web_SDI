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
            <div class="header">
              <div class="title">
                <h1>SD Islam Lumajang</h1>
              </div>
            </div>
            <!-- @if (Route::has('login'))
                  <ul class="menu header-hijau">
                    @if (Auth::check())
                    <a href="{{ url('/home') }}"><li class="menu">Home</li></a>
                    @else
                    <a href="{{ url('/login') }}"><li class="menu">Login</li></a>
                    <a href="{{ url('/register') }}"><li class="menu">Register</li></a>
                    @endif
                  </ul>
            @endif -->

            <ul class="menu menu-hijau header-hijau">
              <a href="{{ url('/home') }}"><li >Home</li></a>
              <a href="{{ url('/berita') }}"><li >Berita</li></a>
              <a href="{{ url('/pengumuman') }}"><li >Pengumuman</li></a>
            </ul>
            <div class="container" style="padding-bottom:20px;">
              <div class="col-sm-2" style="padding-left:0px;padding-right:0px;padding-bottom:0px;">
                <div class="col-sm-12 side-left side-left-hijau" style="padding-left:0px;padding-right:0px;padding-bottom:10px;">
                  <center>
                    <h5 style="color:white;">Profil Sekolah</h5>
                    <div class="member-hijau col-sm-12" style="padding:5px 0px;">
                      <ul style="list-style:none;text-align:left;padding-left:10px;">
                        <li><a href="#" class="link-hijau">Sejarah</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li><a href="#" class="link-hijau">Identitas Sekolah</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li><a href="#" class="link-hijau">Visi & Misi</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li><a href="#" class="link-hijau">Struktur Organisasi</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li><a href="#" class="link-hijau">Dokumen</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li><a href="#" class="link-hijau">Prestasi Sekolah</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                      </ul>
                    </div>
                  </center>
                </div>
                <div class="col-sm-12">
                  &nbsp
                </div>
                <div class="col-sm-12 side-left side-left-hijau" style="padding-left:0px;padding-right:0px;padding-bottom:10px;">
                  <center>
                    <h5 style="color:white;">Sarana Prasarana Sekolah</h5>
                    <div class="member-hijau col-sm-12" style="padding:5px 0px;">
                      <ul style="list-style:none;text-align:left;padding-left:10px;">
                        <li><a href="#" class="link-hijau">Lapangan Parkir</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li><a href="#" class="link-hijau">Lapangan Olahraga</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li><a href="#" class="link-hijau">Ruang Kelas</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li><a href="#" class="link-hijau">Ruang Guru</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li><a href="#" class="link-hijau">Lapangan Upacara</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li><a href="#" class="link-hijau">Ruang UKS</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li><a href="#" class="link-hijau">Ruang Perpustakaan</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li><a href="#" class="link-hijau">Musholla</a></li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                      </ul>
                    </div>
                  </center>
                </div>
                <div class="col-sm-12">
                  &nbsp
                </div>
                <div class="col-sm-12 side-left side-left-hijau" style="padding-left:0px;padding-right:0px;padding-bottom:10px;">
                  <center>
                    <h5 style="color:white;">Kalender</h5>
                    <div class="member-hijau col-sm-12" style="padding:5px 0px;">
                      <ul style="list-style:none;text-align:left;padding-left:10px;">
                        <li>Lapangan Parkir</li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li>Lapangan Olahraga</li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li>Ruang Kelas</li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li>Ruang Guru</li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li>Lapangan Upacara</li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li>Ruang UKS</li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li>Ruang Perpustakaan</li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li>Musholla</li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                      </ul>
                    </div>
                  </center>
                </div>
              </div>
              <div class="main main-hijau col-sm-8">
                @yield('content')
              </div>
              <div class="col-sm-2"style="padding-left:0px;padding-right:0px;padding-bottom:0px;">
                <div class="side-right side-right-hijau">

                  @if (Route::has('login'))
                    @if (Auth::check())

                    @else
                    <center>
                      <h5 style="color:#a7d4b6;">Login Member</h5>
                      <div class=" col-sm-12" style="padding:5px 0px;">
                        <form id="subscribe-form" method="get" action="{{ URL::asset('log') }}">
                          <div class="form-group">
                            <label for="usr">Username:</label>
                            <input type="text" name="username" class="form-control" id="usr">
                          </div>
                          <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" name="password" class="form-control" id="pwd">
                          </div>
                          <input type="submit" name="" class="submit input-submit btn btn-success" value="Submit">
                          <div id="subscribe-result"></div>
                        </form>
                      </div>
                    </center>
                    @endif
                  @endif
                </div>
                <div class="col-sm-12">
                  &nbsp
                </div>
                <div class="col-sm-12 side-left side-left-hijau" style="padding-left:0px;padding-right:0px;padding-bottom:10px;">
                  <center>
                    <h5 style="color:white;">Berita Terbaru</h5>
                    <div class="member-hijau col-sm-12" style="padding:5px 0px;">
                      <ul style="list-style:none;text-align:left;padding-left:10px;">
                        <li>
                          <div  class="col-sm-3">
                            <img src="..." alt="no-image" class="small-thumbnail-berita">
                          </div>
                          <div class="col-sm-9">
                            <h5>Lapangan Parkir</h5><br>
                            <!-- <p>
                            <?php
                            // $text = $text = 'Contoh script yang digunakan untuk memotong 50 huruf pertama dari kalimat / paragraf dengan php';
                            // echo substr($text, 0, '50') . '...';
                             ?>
                           </p> -->
                          </div>
                          <div  class="col-sm-3">
                            <img src="..." alt="no-image" class="small-thumbnail-berita">
                          </div>
                          <div class="col-sm-9">
                            <h5>Lapangan Parkir</h5><br>
                          </div>
                          <div  class="col-sm-3">
                            <img src="..." alt="no-image" class="small-thumbnail-berita">
                          </div>
                          <div class="col-sm-9">
                            <h5>Lapangan Parkir</h5><br>
                          </div>
                          <div  class="col-sm-3">
                            <img src="..." alt="no-image" class="small-thumbnail-berita">
                          </div>
                          <div class="col-sm-9">
                            <h5>Lapangan Parkir</h5><br>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </center>
                </div>
                <div class="col-sm-12">
                  &nbsp
                </div>
                <div class="col-sm-12 side-left side-left-hijau" style="padding-left:0px;padding-right:0px;padding-bottom:10px;">
                  <center>
                    <h5 style="color:white;">Pengumuman Terbaru</h5>
                    <div class="member-hijau col-sm-12" style="padding:5px 0px;">
                      <ul style="list-style:none;text-align:left;padding-left:10px;">
                        <li>
                          <div  class="col-sm-3">
                            <img src="..." alt="no-image" class="small-thumbnail-berita">
                          </div>
                          <div class="col-sm-9">
                            <h5>Lapangan Parkir</h5><br>
                            <!-- <p>
                            <?php
                            // $text = $text = 'Contoh script yang digunakan untuk memotong 50 huruf pertama dari kalimat / paragraf dengan php';
                            // echo substr($text, 0, '50') . '...';
                             ?>
                           </p> -->
                          </div>
                          <div  class="col-sm-3">
                            <img src="..." alt="no-image" class="small-thumbnail-berita">
                          </div>
                          <div class="col-sm-9">
                            <h5>Lapangan Parkir</h5><br>
                          </div>
                          <div  class="col-sm-3">
                            <img src="..." alt="no-image" class="small-thumbnail-berita">
                          </div>
                          <div class="col-sm-9">
                            <h5>Lapangan Parkir</h5><br>
                          </div>
                          <div  class="col-sm-3">
                            <img src="..." alt="no-image" class="small-thumbnail-berita">
                          </div>
                          <div class="col-sm-9">
                            <h5>Lapangan Parkir</h5><br>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </center>
                </div>
              </div>
            </div>
            <div class="about-hijau col-sm-12" style="padding:20px;">
              <div class="col-sm-8">

                <div id="googleMap" style="width:100%;height:400px;"></div>

                <script>
                function myMap() {
                  var mapProp= {
                    center:new google.maps.LatLng(-8.1327774,113.2197564),
                    zoom:17,
                  };
                  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB6QPmMGy3PMQPzx35jdy8RWyxcS6Lz4k&callback=myMap"></script>
              </div>
              <div class="col-sm-4">
                <h4>Contact</h4>
                <ul style="list-style:none;">
                  <li>Alamat : Jl.</li>
                  <li>No. Tlp: +62 85 888 888 888</li>
                  <li>email : email@email.com</li>
                  <li>
                    <br><br>
                      social media :<br>
                      <a href="#" style="color:#2e4cec;"><span><i class="fa fa-facebook"></i></a></span></a>
                      <a href="#" style="color:#3a95f4;"><span><i class="fa fa-twitter"></i></a>
                      <a href="#" style="color:#f73838;"><span><i class="fa fa-google-plus"></i></a>
                      <!-- <a href="#"><span><i class="fa fa-facebook"></i></a> -->
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-12 footer-hijau">
              &copy; 2017 copyright SDI. All Rights reserved.
              <p style="float:right;">Develop by. Abdil Tegar Arifin - Design by. Abdil Tegar Arifin</p>
            </div>
        </div>
      </center>
    </body>
</html>
