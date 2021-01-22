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
      <div class="container">
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
        <div class="row">
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
              <p class="text-justify">Desa Kurrusumanga adalah desa yang berada di kecamatan Belopa, Kabupaten Luwu, Sulawesi Selatan. Desa ini terbagi menjadi 3 dusun yaitu dusun Padang-Padang, Kombong, dan Kurrusumanga.</p>    
            </div>

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
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="/images/anonym.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Megawati</h3>
                <span class="position">Kepala Desa</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="/images/person_7.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Ben Thompson</h3>
                <span class="position">Sekertaris Desa</span>
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
                <img src="/images/person_8.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Kyla Stewart</h3>
                <span class="position">Kaur Umum dan TU</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="/images/person_5.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Kaiara Spencer</h3>
                <span class="position">Kaur Keuangan</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="/images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Kaiara Spencer</h3>
                <span class="position">Kaur Perencanaan</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="/images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Dave Simpson</h3>
                <span class="position">Kasi Pemerintahan</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="/images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Ben Thompson</h3>
                <span class="position">Kasi Kesejahteraan</span>
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
                <img src="/images/person_4.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Chris Stewart</h3>
                <span class="position">Kasi Pelayanan</span>
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
          <div class="col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="">
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
          <div class="col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="/images/agrowisata.jpg" alt="Image" class="img-fluid rounded">
            </figure>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <h5 class="h3 mb-4 text-black">2. Sektor Pariwisata</h5>
              <p class="text-justify">Agrowisata yang terletak di dusun Padang-Padang merupakan hasil inisiatif pemerintah desa Kurrusumanga dengan dukungan warganya yang kemudian memanfaatkan luasnya areal persawahan menjadi tempat wisata. Letaknya yang strategis yaitu dekat dari ibukota Kabupaten Luwu membuat lokasi wisata ini bisa menjadi salah satu opsi tempat wisata untuk masyarakat Kabupaten Luwu secara umum terutama yang berdomisili di daerah Kota Belopa dan sekitarnya.</p>
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

        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <p class="lead text-dark font-weight-bold" data-aos="fade-up" data-aos-delay="100">Pendapatan Desa Tahun 2020</p>
            <!-- <p class="lead text-dark font-weight-bold" data-aos="fade-up" data-aos-delay="100">Pendapatan Desa Tahun 2020</p> -->
          </div>
        </div>
        
        Alokasi Dana Desa
        <div class="progress mb-4" style="height: 35px;">
          <div class="progress-bar bg-success" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">28%</div>
          
        </div>
      
        <!-- <div class="progress mb-4" style="height: 35px;">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>

        <div class="progress mb-4" style="height: 35px;">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>  

        <div class="progress mb-4" style="height: 35px;">
          <div class="progress-bar bg-primary" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>  -->

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
              <span class="icon-phone d-block h4 text-primary"></span>
              <a href="#">+6285 256 145 698</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h4 text-primary"></span>
              <a href="mailto:kurrusumanga@desa.id">kurrusumanga@desa.id</a>
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