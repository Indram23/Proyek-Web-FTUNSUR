<link rel="stylesheet" href="page/css2/cssTSipil.css">
<link rel="stylesheet" href="page/css2/cssMagnify.css">

<div id="button"></div>
<div class ="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xl-12">
        <div class="btn-group btn-breadcrumb">
            <a href="?page=beranda" class="btn btn-success btn1"><i class="glyphicon glyphicon-home"></i></a>
            <span class="btn btn-success btn1">Program Studi</span>
            <span class="btn btn-success btn1"><strong>Teknik Sipil</strong></span>
         </div>
         <hr class="hr-success hr1" />
        </div> 
    </div>
    <div class="row">
        <div class="col-sm-12">
            <center><h2>Teknik Sipil</h2></center>
            
        </div>
        <div class="col-sm-12">  
        <div class="image-set">
                 <a data-magnify="gallery" data-caption="Banner Teknik Sipil" href="image/TSipilBanner.jpg">
                 <img src="image/TSipilBanner.jpg" title="Klik Untuk Prewiew Lebih!">
                    </a>
        </div>
        </div> 
    </div>
    <div class="row">
        <div class="col-sm-12">
            <br>
            <center>
           <div class="panel panel-success">
            <div class="panel-heading"><h4>Visi</h4></div>
             <div class="panel-body"> <p><strong>
“Menjadi Program Studi Teknik Sipil yang Unggul dalam Rekayasa Struktur dan Berstandar Internasional pada Tahun 2031”</strong></p> <br></div>
            </div>
            </center>
            <p>
            Untuk lebih memberikan kejelasan makna dari rumusan visi tersebut maka berikut ini dipaparkan tentang pengertian dari beberapa kata kunci, yaitu : <br>

            a. Unggul <br>

            <span class="tab">Mampu menjadi program studi yang menghasilkan lulusan yang dapat mengatasi permasalahan di bidang rekayasa struktur.</span> <br>

            b. Wirausaha <br>

            <span class="tab">Mampu menghasilkan lulusan yang siap berdikari dalam menjalankan usaha sendiri di bidang jasa konstruksi.</span> <br><br>
            </p>
           <h4>Misi</h4>
           <p>
               <ol>
                   <li>Melaksanakan pendidikan Teknik Sipil yang berkualitas, berorientasi pada kebutuhan dunia jasa konstruksi dengan peningkatan kurikulum yang sesuai dengan kebutuhan dunia konstruksi global.</li>
                   <li>Melakukan kegiatan penelitian yang berkontribusi kepada pemecahan masalah di bidang konstruksi dengan memperbanyak penelitian dan pengabdian dengan publikasi secara nasional dan internasional.</li>
                   <li>Melaksanakan pengabdian kepada masyarakat dan dunia jasa konstruksi dengan melibatkan peran serta instansi pemerintah maupun swasta dalam penyuluhan dan pelatihan serta pengembangan metode pelaksanaan konstruksi.</li>
                   <li> Meningkatkan kemampuan mahasiswa dalam berbahasa asing dengan pemberian kuliah dengan Bahasa inggris dan pelatihan toefl.</li>
                   <li>Menjalin kerjasama dengan perusahaan, lembaga, instansi pemerintah maupun swasta upaya dalam peningkatan softkill dan hardskill dalam penyedian kerja praktek bagi mahasiswa Teknik sipil.</li>
                   <li>Menyelenggarakan pembahasan permasalahan yang terjadi dalam dunia konstruksi beserta solusinya dalam perkuliahan dengan memperbanyak seminar dan pelatihan tentang dunia kontruksi.</li>
                   <li>Meningkatkan kemampuan sumber daya manusia melalui pendidikan studi lanjut dengan pemberian beasiswa untuk staf dan dosen S1 prodi Teknik sipil.</li>
                   <li> Melengkapi sarana infrastruktur dalam proses belajar mengajar dengan peningkatan gedung laboratorium dan sarana kelas yang ber ac.</li>
                </ol>
           </p> <br>
           <h4><i>Sasaran dan Strategi Pencapaiannya</i></h4>
           <p>
           <span class="tab">Visi dan misi serta tujuan yang ingin dicapai oleh program studi Teknik Sipil sejalan dengan visi misi Fakultas dan Universitas. Berdasarkan hal tersebut, sasaran yang akan dicapai mencakup: </span>
                <ol>
                    <li>Menerima mahasiswa baru dengan pertimbangan kemampuan akademik yang memadai.</li>
                    <li>Melakukan proses belajar mengajar dengan mempertimbangkan kualitas yang sejalan dengan perkembangan teknologi.</li>
                    <li>Peningkatan mutu lulusan yang terampil bekerja dan mampu bersaing di era global.</li>
                    <li>Memiliki kurikulum berbasis kompetensi yang mengacu pada perkembangan kebutuhan institusi pengguna lulusan.</li>
                    <li>Peningkatan kualitas kecerdasan emosionaldan spiritual bagi lulusan.</li>
                </ol>
            </p>
          
     </div>
  
</div>
  
    <div id=menuProfil>
    <div class="row">
         <div class="col-sm-12">
            <hr class="hr-success" />
            <ol class="breadcrumb bread-primary ">   
            <h4><Strong>Menu Program Studi</Strong></h4>  
            <li><i class="fas fa-check"> Teknik Sipil</i></li>
            <li><a href="?page=IT"><i class="fa fa-times"> Teknik Informatika</i>  </a></li>
            <li><a href="?page=TIndustri"><i class="fa fa-times"> Teknik Industri</i>  </a></li>
           
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