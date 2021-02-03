<!doctype html>
<html lang="en">
  <head>
    <title>Website Resmi Pemerintah Desa Kurrusumanga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    @include('includes.header')

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(/images/bg2.jpg);" data-aos="fade" id="home-section">
        
        <!-- <div class="slide-one-item home-slider owl-carousel" data-ride="carousel">
          <div>
            <div class="testimonial" >
              <!-- <img class="d-block w-100" src="/images/bg.jpg" alt="First slide"> -->
              <div class="site-blocks-cover overlay" style="background-image: url(/images/bg2.jpg);"></div>
            </div>
          </div>
        
          <div>  
            <div class="testimonial">
              <!-- <img class="d-block w-100" src="/images/bg2.jpg" alt="Second slide"> -->
              <div class="site-blocks-cover overlay" style="background-image: url(/images/bg.jpg);"></div>
            </div>
          </div>

          <div>  
            <div class="testimonial">
              <!-- <img class="d-block w-100" src="/images/hero_1.jpg" alt="Third slide"> -->
              <div class="site-blocks-cover overlay" style="background-image: url(/images/agrowisata.jpg);"></div>
            </div>
          </div>
        </div> -->

      <div class="container container-cover">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-8 mt-lg-5 text-center">
            <h1 class="text-uppercase" data-aos="fade-up">Selamat Datang</h1>
            <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Website Resmi Pemerintah Desa Kurrusumanga</p>
            <div data-aos="fade-up" data-aos-delay="100">
              <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Get In Touch</a>
            </div>
          </div>  
        </div>
    </div>

      <a href="#about-section" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>  

   

    
    <div class="site-section cta-big-image" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Profil Desa</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <!-- <img src="/images/hero_1.jpg" alt="Image" class="img-fluid"> -->
            <div class="embed-responsive embed-responsive-4by3">
              <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32941.65481628724!2d120.3199468818006!3d-3.3819002307814547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d96a550093b44e9%3A0xa63f0f3a5c50398!2sKurusumanga%2C%20Belopa%2C%20Kabupaten%20Luwu%2C%20Sulawesi%20Selatan!5e1!3m2!1sid!2sid!4v1611195649167!5m2!1sid!2sid"  style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <!-- <h3 class="h3 mb-4 text-black">For the next great business</h3> -->
              <p class="text-justify">Desa Kurrusumanga terletak di wilayah kecamatan Belopa, Kabupaten Luwu, Sulawesi Selatan. Desa dengan luas 3,4287 km<sup>2</sup> ini terdiri atas 3 dusun yaitu :</p>    
            </div>

            <div class="mb-4">
              <ul class="success">
                <li>Dusun Padang-Padang</li>
                <li>Dusun Kombong</li>
                <li>Dusun Kurrusumanga</li>
              </ul>
            </div>

            <!-- <div class="mb-4">
              <p class="text-justify">Data penduduk desa kurrusumanga dapat dilihat pada tabel dibawah ini.</p>    
            </div> -->

          
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12 mb-1" data-aos="fade-up" data-aos-delay="">
            <p class="font-weight-bold text-center">DATA PENDUDUK DESA KURRUSUMANGA TAHUN 2020</p>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-12 mb-5 table-responsive " data-aos="fade-up" data-aos-delay="">
              <table class="table table-bordered">
                <thead class="thead-dark text-center">
                  <tr>
                    <th rowspan="2" style="vertical-align : middle;text-align:center;">NAMA DUSUN</th>
                    <th colspan="3" scope="col">JUMLAH KELOMPOK</th>
                    <th colspan="2" scope="col">JUMLAH</th>
                    <th colspan="2" scope="col">JUMLAH JIWA</th>
                  </tr>
                  <tr>
                    <th scope="col">PKK RW</th>
                    <th scope="col">PKK RT</th>
                    <th scope="col">DASA WISMA</th>
                    <th scope="col">KRT</th>
                    <th scope="col">KK</th>
                    <th scope="col">L</th>
                    <th scope="col">P</th>
                  </tr>
                </thead>
                  
                <tbody class="text-center">
                  <tr>
                    <th scope="row">Padang-Padang</th>
                    <td>0</td>
                    <td>0</td>
                    <td>5</td>
                    <td>140</td>
                    <td>185</td>
                    <td>371</td>
                    <td>385</td>
                  </tr>
                  <tr>
                    <th scope="row">Kombong</th>
                    <td>0</td>
                    <td>0</td>
                    <td>3</td>
                    <td>97</td>
                    <td>89</td>
                    <td>181</td>
                    <td>195</td>
                  </tr>
                  <tr>
                    <th scope="row">Kurrusumanga</th>
                    <td>0</td>
                    <td>0</td>
                    <td>3</td>
                    <td>84</td>
                    <td>101</td>
                    <td>182</td>
                    <td>242</td>
                  </tr>
                </tbody>
              </table>

             
          </div>
        </div>
      </div>  
    </div>
    
    <section class="site-section border-bottom bg-light" id="team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Pemerintahan</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Sinergitas Kami</p>
          </div>
        </div>
        <div class="row" style="margin-top: 100px;">

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="https://web.facebook.com/megawati.i.hajar" target="_blank"><span class="icon-facebook"></span></a></li>
                </ul>
                <img src="/images/kades.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Megawati</h3>
                <span class="position text-dark">Kepala Desa</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="https://web.facebook.com/ulfaeka90"><span class="icon-facebook"></span></a></li>
                </ul>
                <img src="/images/anonym.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Ulfa Eka Saputri, S.Si</h3>
                <span class="position text-dark">Sekertaris Desa</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="/images/rahmi.jpeg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Sri Rahmi Mansyur</h3>
                <span class="position text-dark">Kasek Pemerintahan</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="https://web.facebook.com/ikbalbifa.mualif"><span class="icon-facebook"></span></a></li>
                </ul>
                <img src="/images/ikbal.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Ikbal</h3>
                <span class="position text-dark">Kasek Kesejahteraan & Pelayanan</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="https://web.facebook.com/lisnawati.lukman.56"><span class="icon-facebook"></span></a></li>
                </ul>
                <img src="/images/lisnawati.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Lisnawati</h3>
                <span class="position text-dark">Kaur Umum & Perencanaan</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="https://web.facebook.com/darma.kadir.7?comment_id=Y29tbWVudDo4MjQ1MDAxOTEzNjYxOTJfODI0NTAyNTg4MDMyNjE5"><span class="icon-facebook"></span></a></li>
                </ul>
                <img src="/images/darmawati.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Darmawati</h3>
                <span class="position text-dark">Kaur Keuangan</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="https://web.facebook.com/suaib.yusuf.77"><span class="icon-facebook"></span></a></li>
                </ul>
                <img src="/images/anonym.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Suaib, SP</h3>
                <span class="position text-dark">Kadus Padang-Padang</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="https://web.facebook.com/masjud.ajju.7"><span class="icon-facebook"></span></a></li>
                </ul>
                <img src="/images/anonym.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Masjud</h3>
                <span class="position text-dark">Kadus Kombong</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <!-- <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li> -->
                </ul>
                <img src="/images/anonym.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Firman Rahman</h3>
                <span class="position text-dark">Kadus Kurrusumanga</span>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>


    <section class="site-section cta-big-image" id="potensi-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-5">Potensi Desa</h2>
          </div>
        </div>
        <div class="row mt-4 mb-5">
          <div class="col-lg-5 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="/images/sawah.jpg" alt="Image" class="img-fluid rounded">
            </figure>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <h5 class="h3 mb-4 text-black">1. Sektor Pertanian</h5>
              <p class="text-justify">Salah satu mata pencaharian utama masyarakat desa kurrusumanga adalah petani. Hal ini dikarenakan lebih dari 50% persen wilayah desa merupakan areal persawahan.</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-5 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="/images/agrowisata.jpg" alt="Image" class="img-fluid rounded">
            </figure>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <h5 class="h3 mb-4 text-black">2. Sektor Pariwisata</h5>
              <p class="text-justify">Agrowisata yang terletak di dusun Padang-Padang merupakan hasil inisiatif pemerintah desa Kurrusumanga dengan dukungan warganya yang kemudian memanfaatkan luasnya areal persawahan menjadi tempat wisata. Letaknya yang strategis yaitu dekat dari ibukota Kabupaten Luwu membuat lokasi wisata ini bisa menjadi salah satu opsi tempat wisata untuk masyarakat Kabupaten Luwu secara umum terutama yang berdomisili di daerah Kota Belopa dan sekitarnya.</p>
              <p class="text-justify">Anda bisa mendapatkan informasi lokasi wisata ini <a href="https://goo.gl/maps/khwCvmVcVkZoUpcT7" target="_blank">disini</a></p>
            </div>
          </div>
        </div>
        

      </div>  
    </section>

    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Berita Desa</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="h-entry">
              <a href="single.html">
                <img src="/images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">Where Do You Learn HTML & CSS in 2019?</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="h-entry">
              <a href="single.html">
                <img src="/images/img_4.jpg" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">Where Do You Learn HTML & CSS in 2019?</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="h-entry">
              <a href="single.html">
                <img src="/images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">Where Do You Learn HTML & CSS in 2019?</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div>
      </div>
    </section>
  
    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Dana Desa</h2>
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-12 text-center" data-aos="fade">
            <p class="lead text-dark font-weight-bold" data-aos="fade-up" data-aos-delay="100">Pendapatan Desa Tahun 2020</p>
            <p class="text-dark text-center font-weight-bold" data-aos="fade-up" data-aos-delay="100">Total : Rp. 1,054,540,601,-</p>
          </div>
        </div>
        
        Dana Desa
        <div class="progress mb-4" style="height: 35px;">
          <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><span class="text-dark" style="position: absolute; left:0; right:0;">Rp. 742.191.000,-</span></div>
        </div>
      
        Bagi Hasil Pajak Retribusi
        <div class="progress mb-4" style="height: 35px;"> 
          <div class="progress-bar bg-danger" role="progressbar" style="width: 1.2%;" aria-valuenow="1.2" aria-valuemin="0" aria-valuemax="100"><span class="text-dark" style="position: absolute; left:0; right:0;">Rp. 13.312.497,-</span></div>
        </div>

        Alokasi Dana Desa
        <div class="progress mb-4" style="height: 35px;">
          <div class="progress-bar bg-primary" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"><span class="text-dark" style="position: absolute; left:0; right:0;">Rp. 298.614.000,-</span></div>
        </div>  

        Pendapatan Lain-Lain
        <div class="progress mb-5" style="height: 35px;">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 0.04%;" aria-valuenow="0.04" aria-valuemin="0" aria-valuemax="100"><span class="text-dark" style="position: absolute; left:0; right:0;">Rp. 423.104,-</span></div>
        </div>  





        <div class="row mb-2" style="margin-top: 100px;">
          <div class="col-12 text-center" data-aos="fade">
            <p class="lead text-dark font-weight-bold" data-aos="fade-up" data-aos-delay="100">Belanja Desa Tahun 2020</p>
            <p class="text-dark text-center font-weight-bold" data-aos="fade-up" data-aos-delay="100">Total : Rp. 1,054,595,767,-</p>
          </div>
        </div>

        <!-- 1,054,595,767 -->
        
        Bidang Penyelenggaraan Pemerintahan Desa
        <div class="progress mb-4" style="height: 35px;">
          <div class="progress-bar bg-success" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"><span class="text-dark" style="position: absolute; left:0; right:0;">Rp. 301.144.767,-</span></div>
        </div>
      
        Bidang Pelaksanaan Pembangunan Desa
        <div class="progress mb-4" style="height: 35px;"> 
          <div class="progress-bar bg-danger" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"><span class="text-dark" style="position: absolute; left:0; right:0;">Rp. 435.751.000,-</span></div>
        </div>

        Bidang Pembinaan Kemasyarakatan
        <div class="progress mb-4" style="height: 35px;">
          <div class="progress-bar bg-primary" role="progressbar" style="width: 1.3%;" aria-valuenow="1.3" aria-valuemin="0" aria-valuemax="100"><span class="text-dark" style="position: absolute; left:0; right:0;">Rp. 14.600.000,-</span></div>
        </div>  

        Bidang Pemberdayaan Masyarakat
        <div class="progress mb-4" style="height: 35px;">
          <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><span class="text-dark" style="position: absolute; left:0; right:0;">Rp. 0,-</span></div>
        </div>

        Bidang Penanggulangan Bencana, Darurat dan Mendesak Desa
        <div class="progress mb-4" style="height: 35px;">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"><span class="text-dark" style="position: absolute; left:0; right:0;">Rp. 303.100.000,-</span></div>
        </div>  
        </div>
    </section>


    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Hubungi Kami</h2>
          </div>
        </div>
        <div class="row mb-5">
          


          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h4 text-primary"></span>
              <span>Desa Kurrusumanga, Kecamatan Belopa, Kabupaten Luwu, Sulawesi Selatan</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-facebook d-block h4 text-primary"></span>
              <a href="https://web.facebook.com/pemdes.kurrusumanga" target="_blank">@PemDes Kurrusumanga</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h4 text-primary"></span>
              <a href="mailto:kurrusumanga@desa.id">desakurrusumanga@gmail.com</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Form Keluhan</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nama Depan</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Nama Belakang</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subjek</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Pesan</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Tulis pesan anda disini..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Kirim Pesan" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          
        </div>
      </div>
    </section>

    
    @include('includes.footer')

  </div> <!-- .site-wrap -->

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')


    
  </body>
</html>