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
    </head>
    <body>
      <center>
        <div class="wrap ">
            <div class="header">
              <div class="title">
                <h1>Title</h1>
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
                        <li>Sejarah</li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li>Visi & Misi</li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li>Struktur Organisasi</li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li>Dokumen</li>
                        <hr style="margin-bottom:10px;margin-top:0px;">
                        <li>Prestasi Sekolah</li>
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
            <div class="col-sm-12 footer-hijau">
              &copy; 2017 copyright SDI. All Rights reserved.
              <p style="float:right;">Develop by. Abdil Tegar Arifin (Lumajang Developer) - Design by. Abdil Tegar Arifin (Lumajang Developer)</p>
            </div>
        </div>
      </center>
    </body>
</html>
