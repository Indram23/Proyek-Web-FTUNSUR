<link rel="stylesheet" href="page/css2/cssIndustri.css">
<link rel="stylesheet" href="page/css2/cssMagnify.css">

<div id="button"></div>
<div class ="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xl-12">
        <div class="btn-group btn-breadcrumb">
            <a href="?page=beranda" class="btn btn-primary btn1"><i class="glyphicon glyphicon-home"></i></a>
            <span class="btn btn-primary btn1">Program Studi</span>
            <span class="btn btn-primary btn1"><strong>Teknik Industri</strong></span>
         </div>
         <hr class="hr-primary hr1" />
        </div> 
    </div>
    <div class="row">
        <div class="col-sm-12">
            <center><h2>Teknik Industri</h2></center>
            
        </div>
        <div class="col-sm-12">  
        <div class="image-set">
                 <a data-magnify="gallery" data-caption="Banner Teknik Industri" href="image/TIndustriBanner.jpg">
                 <img src="image/TIndustriBanner.jpg" title="Klik Untuk Prewiew Lebih!">
                    </a>
        </div>
        </div> 
    </div>
    <div class="row">
        <div class="col-sm-12">
            <br>
            <center>
           <div class="panel panel-primary">
            <div class="panel-heading"><h4>Visi</h4></div>
             <div class="panel-body"> <p><strong>“Menjadi  Program Studi Teknik Industri yang unggul dalam bidang Sistem Manufaktur yang  bertaraf internasional tahun 2031.    ”</strong></p> <br></div>
            </div>
            </center>
            <p>
            Untuk lebih memberikan kejelasan makna dari rumusan visi tersebut maka berikut ini dipaparkan tentang pengertian dari beberapa kata kunci, yaitu : <br>

            a. Unggul <br>

            <span class="tab">Program Studi Teknik Industri mampu meluluskan Sarjana yang memiliki pengetahuan yang mumpuni di bidang Teknik Industri dan mampu bekerja secara profesional. </span> <br>

            b. Bertaraf Internasional <br>

            <span class="tab">Program Studi Teknik Industri yang diakui secara internasional dan  meluluskan Sarjana yang mampu bekerja di perusahaan bertaraf internasional.</span> <br><br>
            </p>
           <h4>Misi</h4>
           <p>
               <ol>
                   <li>Menyelenggarakan pendidikan dan pengajaran bidang Teknik Industri yang berkualitas dengan kurikulum berbasis kompetensi.</li>
                   <li>Melakukan penelitian yang memiliki kontribusi bagi pengembangan ilmu pengetahuan khususnya bidang ilmu Teknik Industri.</li>
                   <li>Melakukan pengabdian masyarakat yang sesuai dengan kebutuhan.</li>
                   <li>Melakukan peningkatan kemampuan mahasiswa dalam berbahasa Inggris.</li>
                   <li>Menjalin kerjasama dengan Perguruan Tinggi dalam maupun luar negeri.</li>
                   <li>Menjalin kerjasama dengan lembaga pemerintahan dan swasta, baik di dalam maupun di luar negeri.</li>
               </ol>
           </p> <br>
           <h4><i>Tujuan dan Sasaran</i></h4>
           <h4>Tujuan :</h4>
           <p>
               <ol>
                   <li>Memberdayakan dosen yang mampu mentransfer ilmu pengetahuan dan teknologi kepada mahasiswa, sehingga lulusannya memiliki daya saing Internasional.</li>
                   <li>Menghasilkan lulusan yang mampu berbahasa Inggris, sehingga dapat diterima di perusahaan-perusahaan bertaraf Internasional.</li>
                   <li>Menciptakan  lulusan yang memiliki kemampuan wirausaha secara global.</li> 
                   <li>Memberdayakan dosen dan menghasilkan mahasiswa yang memiliki wawasan keilmuan secara mutakhir.</li>
                   <li>Menghasilkan karya penelitian dosen dan mahasiswa yang dapat dipublikasikan pada jurnal terakreditasi.</li>
                   <li>Menghasilkan karya pengabdian yang bermanfaat bagi masyarakat secara luas.  </li>         
                </ol>
           </p> <br>
           <h4>Sasaran :</h4>
           <p>
               <ol>
                   <li> <strong>Periode I Pencapaian Tahun 2016/2017 s/d 2020/2021 </strong> <br> 

                   <span class="tab">Pencapaian pada periode ini adalah menjadi  Program Studi Teknik Industri yang unggul dalam bidang Sistem Manufaktur yang bertaraf regional Jawa Barat. </span> </li>
                   <li> <strong>Periode II  pencapaian tahun 2021/2022 s/d 2025/2026 </strong> <br> 

                   <span class="tab">Pencapaian pada periode ini adalah menjadi  Program Studi Teknik Industri yang unggul dalam bidang Sistem Manufaktur yang bertaraf Nasional. </span> </li>
                   <li> <strong>Periode III pencapaian tahun 2026/2027 s/d 20302031</strong>  <br> 
                    <span class="tab">  Pencapaian pada periode ini adalah menjadi Program Studi Teknik Industri yang unggul dalam bidang Sistem Manufaktur yang bertaraf Internasional.</span> </li>
               </ol>
          
     </div>
  
</div>
  
    <div id=menuProfil>
    <div class="row">
         <div class="col-sm-12">
            <hr class="hr-primary" />
            <ol class="breadcrumb bread-primary ">   
            <h4><Strong>Menu Program Studi</Strong></h4>  
            <li><i class="fas fa-check"> Teknik Industri</i></li>
            <li><a href="?page=TSipil"><i class="fa fa-times"> Teknik Sipil</i></a></li>
            <li><a href="?page=IT"><i class="fa fa-times"> Teknik Informatika</i>  </a></li>
            
        </ol>
         </div>
     </div>
     </div>
     <script src="js/jquery.magnify.js"></script>
    
        <script>
            $('[data-magnify]').magnify({
            resizable: false,
             headToolbar: [
                'close'
            ],
            initMaximized: true
            })
        </script>

        <script >
           var btn = $('#button');

      $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
      btn.addClass('show');
      } else {
      btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
    });
    </script>
     
</div>