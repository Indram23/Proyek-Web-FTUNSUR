<link rel="stylesheet" href="page/css2/cssIT.css">
<link rel="stylesheet" href="page/css2/cssMagnify.css">

<div id="button"></div>
<div class ="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xl-12">
        <div class="btn-group btn-breadcrumb">
            <a href="?page=beranda" class="btn btn-info"><i class="glyphicon glyphicon-home"></i></a>
            <span class="btn btn-info btn1">Program Studi</span>
            <span class="btn btn-info btn1"><strong>Teknik Informatika</strong></span>
         </div>
         <hr class="hr-primary hr1" />
        </div> 
    </div>
    <div class="row">
        <div class="col-sm-12">
            <center><h2>Teknik Informatika</h2></center>
            
        </div>
        <div class="col-sm-12">  
        <div class="image-set">
                 <a data-magnify="gallery" data-caption="Banner Teknik Informatika" href="image/TIBanner.jpg">
                 <img src="image/TIBanner.jpg" title="Klik Untuk Prewiew Lebih!">
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
             <div class="panel-body"> <p><strong>“Pada tahun 2031 menjadi Program Studi Teknik Informatika yang Unggul di Bidang Rekayasa Teknologi Informasi berstandar Internasional”</strong></p> <br></div>
            </div>
            </center>
           <h4>Misi</h4>
           <p>
               <ol>
                   <li>Melaksanakan pendidikan di bidang rekayasa teknologi informasi yang berkualitas dalam  menganalisa, merancang, membuat dan mengembangkan sistem informasi dan multimedia.</li>
                   <li>Melaksanakan kegiatan penelitian dan pengembangan keilmuan yang mempunyai kontribusi terhadap kemajuan ilmu teknologi informasi tingkat nasional dan internasional.</li>
                   <li>Melaksanakan pengabdian kepada masyarakat di bidang rekayasa teknologi informasi yang bersifat pada pemecahan masalah, pengembangan sistem, konsultasi, penyuluhan dan pelatihan yang profesional.</li>
                   <li>Melaksanakan tata kelola, manajemen organisasi dan pelayanan terhadap civitas akademik.</li>
                   <li> Melaksanakan peningkatan sarana untuk mendukung proses akademik.</li>
                   <li>Melaksanakan peningkatan sumber daya dosen, tenaga pendidik dan mahasiswa.</li>
                   <li>Melaksankan kerjasama dengan instansi pemerintah, perguruan tinggi dan industri dalam kegiatan pendidikan, penelitian dan pengabdian kepada masyarakat.</li>
               </ol>
           </p> <br>
           <h4><i>Tujuan dan Sasaran</i></h4>
           <h4>Tujuan :</h4>
           <p>
               <ol>
                   <li>Menghasilkan lulusan yang memiliki kemampuan di bidang rekayasa teknologi informasi tepat waktu dengan nilai akademik minimal 3,00.</li>
                   <li>Menghasilkan lulusan yang memiliki kemampuan hardskills dan softskills dalam bidang Teknik Informatika dalam hal menganalisis, mendesain, membuat dan mengembangkan rekayasa teknologi informasi.</li>
                   <li>Menghasilkan penelitian dibidang pengembangan rekayasa teknologi informasi yang dipublikasikan dijurnal nasional dan internasional.</li> 
                   <li>Menghasilkan kegiatan pengabdian kepada masyarakat yang melibatkan mahasiswa dan dosen dalam peran, fungsi, dan kontribusi teknik informatika di masyarakat.</li>
                   <li>Menghasilkan kegiatan keterlibatan program studi dalam aktifitas pemberdayaan masyarakat dan peran serta terhadap kualitas kebijakan dan program pemerintah.</li>
                   <li>Menghasilkan peningkatan tata kelola, manajemen dan layanan yang bersinergi.</li>
                   <li>Menghasilkan pengelolaan sarana dan prasarana secara akuntabel, transparan, efektif dan efisien.</li>
                   <li>Menghasilkan kemampuan tenaga kependidikan, dosen dan mahaasiswa dalam proses belajar mengajar serta dalam penguasaan dan pemahaman terhadap bidang kajian yang ditekuni.</li>
                   <li>Menghasilkan kerjasama dengan instansi pemerintah, perguruan tinggi dan industri dalam kegiatan pendidikan, penelitian dan pengabdian kepada masyarakat yang menghasilkan inovasi untuk peningkatan kesejahteraan masyarakat.</li>          
                </ol>
           </p> <br>
           <h4>Sasaran :</h4>
           <p>
               <ol>
                   <li>Prodi Teknik Informatika Unggul dalam Tridarma Perguruan Tinggi ditingkat Nasional dan Internasional.</li>
                   <li>Menjadi Teknik Informatika bertaraf nasional dan internasional dengan penguatan dan penajaman tata kelola berbasis teknologi informasi.</li>
                   <li>Menjadi Teknik Informatika bertaraf nasional dengan penanaman tata kelola berbasis teknologi informasi.</li>
               </ol>
           </p> <br>
           <h4>Struktur Organisasi Prodi Teknik Informatika</h4>
                <div class="image-set">
                 <a data-magnify="gallery" data-caption="Struktur Organisasi Prodi Teknik Informatika" href="image/organIT.png">
                    <img src="image/organIT.png" title="Klik Untuk Preview Lebih!">
                    </a>
                </div>
     </div>
  
</div>
  
    <div id=menuProfil>
    <div class="row">
         <div class="col-sm-12">
            <hr class="hr-primary" />
            <ol class="breadcrumb bread-primary ">   
            <h4><Strong>Menu Program Studi</Strong></h4>  
            <li><i class="fas fa-check"> Teknik Informatika</i></li>
            <li><a href="#"><i class="fa fa-times"> Teknik Industri</i>  </a></li>
            <li><a href="#"><i class="fa fa-times"> Teknik Sipil</i>  </a></li>
        </ol>
         </div>
     </div>
     </div>
     <script src="jquery.magnify.js"></script>
    
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