<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Fakultas Teknik UNSUR</title>
  <link rel="shortcut icon" type="image/png" href="image/teknik.png"/>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
      <link rel="stylesheet" href="css/cssDashboard.css">
      <link rel="stylesheet" href="page/css2/cssBeranda2.css">
      <link rel="stylesheet" href="page/css2/cssCard.css">
      
 
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
            <header>
                  <nav>
                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>
                        <div class="logo">
                                    <a href="?page=beranda"><img id="logoHeader" src="image/unsur.png" alt=""></a>
                        </div>  
                        <div class="menu">
                              <ul>
                                    <li><a href="?page=beranda">Beranda</a></li>    
                                    <div class="dropdown">
                                          <button class="btn btn-primary dropdown-toggle btn-1" type="button" data-toggle="dropdown">Profil
                                          <span class="caret"></span></button>
                                          <ul class="dropdown-menu"> 
                                            <li><a href="?page=sambutan">Sambutan</a></li>
                                            <li><a href="?page=sejarah">Sejarah</a></li>        
                                          </ul>
                                        </div>    
                                    <div class="dropdown">
                                          <button class="btn btn-primary dropdown-toggle btn-1" type="button" data-toggle="dropdown">Program Studi
                                          <span class="caret"></span></button>
                                          <ul class="dropdown-menu">
                                            <li><a href="#">Teknik Informatika</a></li>
                                            <li><a href="#">Teknik Industri</a></li>
                                            <li><a href="#">Teknik Sipil</a></li>
                                          </ul>
                                        </div>
                                    <li><a href="#">E-Dokumen</a></li>
                                    <li><a href="#">Berita</a></li>
                                    <li><a href="#">Pedoman Akademik</a></li>
                                    <li><a href="#">Login</a></li>
                              </ul>
                        </div>
                  </nav>
            </header>

            <div id="Konten">
              <?php include 'content.php';?>
            </div>

               <!-- FOOTER START -->
        <div class="footer">
          <div class="contain">
          <div class="col">
            <h1>Kontak Kami</h1>
            <ul>
              <li><i class="fas fa-road"> Jl Pasir Gede Raya Cianjur</i></li>
              <li><i class="fas fa-phone"> Phone : (0263) 283578</i></li>
              <li><i class="fas fa-fax"> Faxmile : (0263) 283578</i></li>
              <li><i class="fas fa-envelope"> E-Mail : info@ftunsur.ac.id</i></li>
            </ul>
          </div>
          <div class="col">
            <h1>Blogroll</h1>
            <ul>
              <li>Dosen Pengajar</a></li>
              <li>Blog Dosen</a></li>
              <li>Jurnal</a></li>
            </ul>
          </div>
          <div class="col">
            <h1>Link Terkait</h1>
            <ul>
              <li><a href="https://www.unsur.ac.id">Universitas Suryakancana</a></li>
              <li><a href="http://fhukum.unsur.ac.id/">Faklutas Hukum</a></li>
              <li><a href="http://fkip.unsur.ac.id/">Fakultas Keguruan Dan Ilmu Pendidikan</a></li>
              <li><a href="http://faster.unsur.ac.id/">Fakultas Sains dan Terapan</a></li>
              <li><a href="http://febi.unsur.ac.id/">Fakultas Ekonomi dan Bisnis Islam</a></li>
              <li><a href="http://pascahukum.unsur.ac.id/">Pasca Sarjana Hukum</a></li>
              <li><a href="http://pascapbsi.unsur.ac.id/">Pasaca Sarjana Pendidikan Bahasa dan Sastra Indonesia</a></li>
            </ul>
          </div>
          <div class="col">
            <h1>Akademik</h1>
            <ul>
              <li><a href="http://dosen.com/">Evaluasi Dosen</a></li>
              <li>Tracer</li>
              <li><a href="https://mysocialmate.com/u/labtif.unsur">Lab Informatika</a></li>
            </ul>
          </div>
          <div class="col social">
            <h1>Media Sosial</h1>
            <ul>
              <li><a href="https://www.facebook.com/groups/138482999538594/ "><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></a></li>
              <li><a href="https://twitter.com/teknik_unsur?lang=en"><img src="https://svgshare.com/i/1d.svg" width="32" style="width: 32px;"></a></li>
              <li><a href="https://mysocialmate.com/u/himatifunsur"><img src="https://svgshare.com/i/BQU.svg" width="32" style="width: 32px;"></a></li>
            </ul>
          </div>
        <div class="clearfix"></div>
        </div>
        </div>

            <div id="footer">
              <p>&copy; Copyright 2019 FTUNSUR</p>
            </div>

            <script>
            // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })

      </script>
     
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
