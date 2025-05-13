<!DOCTYPE html>
<html lang="en">

@foreach ($informasi as $no => $info)

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$info->nama_toko}}</title>
</head>

<body>
@include('companyprofile.asset.cssCompany')
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="mu-preloader">
      <img src="assets/img/preloader.gif" alt=" loader img">
    </div>
  </div>
  <!--START SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
    <span>Top</span>
  </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <a class="navbar-brand" href="/"><img src="assets/img/logo.png" alt="Logo img"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="#mu-slider">BERANDA</a></li>
            <li><a href="#mu-about-us">TENTANG KAMI </a></li>
            <li><a href="#mu-restaurant-menu">MENU</a></li>
            <li><a href="#mu-gallery">GALERI</a></li>
            <li><a href="#mu-client-testimonial">TESTIMONI</a></li>
            <!-- <li><a href="#mu-latest-news">BLOG</a></li> -->
            <li><a href="#mu-contact">KONTAK</a></li>
            <li><a href="/login">SIGN IN</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
  </header>
  <!-- End header section -->


  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area">
      <!-- Top slider -->
      <div class="mu-top-slider">
        <!-- Top slider single slide -->
        <div class="mu-top-slider-single">
          <img src="assets/img/slider/bg-top.jpg" alt="img">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title">Selamat Datang</span>
            <h2 class="mu-slider-title">DAPUR WULAN</h2>
            <p>"Masakan terbaik tercipta dari cinta dan ketulusan. Biarkan Dapur Wulan hadir di setiap momen spesialmu, menyajikan rasa yang tak terlupa."</p>
            <a href="https://wa.link/fr52o0" target="_blank" class="mu-readmore-btn">PESAN SEKARANG</a>
          </div>
          <!-- / Top slider content -->
        </div>
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="mu-title">
              <span class="mu-subtitle">Jelajahi</span>
              <h2>TENTANG KAMI</h2>
              <i class="fa fa-spoon"></i>
              <span class="mu-title-bar"></span>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mu-about-us-left">
                <p style="text-align:justify;">{{$info->deskripsi}}</p>  
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right">                
                 <ul class="mu-abtus-slider">                 
                   <li><img src="assets/img/about-us/1.jpg" alt="ABOUT-US-IMAGE"></li>
                 </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <!-- Start Counter Section -->
  <section id="mu-counter">
    <div class="mu-counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-counter-area">
              <ul class="mu-counter-nav">
                <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Produk</span>
                    <h3><span class="counter">{{ $cproduk }}</span><sup>+</sup></h3>
                    <p>Yang bikin penasaran</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Jenis Produk</span>
                    <h3><span class="counter">{{ $cjenis }}</span><sup>+</sup></h3>
                    <p>Hingga Saat Ini</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Pesanan</span>
                    <h3><span class="counter">2000</span><sup>+</sup></h3>
                    <p>Sejak Awal Berdiri</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-3 col-xs-12">
                  <div class="mu-single-counter">
                    <span>Testimoni</span>
                    <h3><span class="counter">{{ $ctesti }}</span><sup>+</sup></h3>
                    <p>Yuk Ikut kirim pengalamanmu</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Section -->

  <!-- Start Restaurant Menu -->
  @include('companyprofile.menu')
  <!-- End Restaurant Menu -->

  <!-- Start Gallery -->
  @include('companyprofile.gallery')
  <!-- End Gallery -->

  <!-- Start Client Testimonial section -->
  @include('companyprofile.testimonial')
  <!-- End Client Testimonial section -->


  <!-- Start Contact section -->
  @include('companyprofile.contact')
  <!-- End Contact section -->

  <!-- Start Map section -->
  <section id="mu-map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d897.3483723209646!2d106.87529853505758!3d-6.402839014998339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1745725570141!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
      width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
  </section>
  <!-- End Map section -->

  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-footer-area">
            <div class="mu-footer-social">
              <a href="#"><span class="fa fa-facebook"></span></a>
              <a href="#"><span class="fa fa-twitter"></span></a>
              <a href="#"><span class="fa fa-google-plus"></span></a>
              <a href="#"><span class="fa fa-linkedin"></span></a>
              <a href="#"><span class="fa fa-youtube"></span></a>
            </div>
            <div class="mu-footer-copyright">
              <p>by <a rel="nofollow" href="#">syNisa</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  @include('companyprofile.asset.jsCompany')
  @endforeach
</body>

</html>