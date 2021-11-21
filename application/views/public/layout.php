<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?php echo $title; ?> | SISDA-PABAR</title>


  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-57x57.png'); ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-60x60.png'); ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-72x72.png'); ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-76x76.png'); ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-114x114.png'); ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-120x120.png'); ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-144x144.png'); ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-152x152.png'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-180x180.png'); ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/backend/assets/favicon/android-icon-192x192.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/backend/assets/favicon/favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/backend/assets/favicon/favicon-96x96.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/backend/assets/favicon/favicon-16x16.png'); ?>">
  <link rel="manifest" href="<?php echo base_url('assets/backend/assets/favicon/manifest.json'); ?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo base_url('assets/backend/assets/favicon/ms-icon-144x144.png'); ?>">
  <meta name="theme-color" content="#ffffff">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/bootstrap.min.css'); ?>">
  <!-- Meterial Icon CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/materialdesignicons.min.css'); ?>">
  <!-- Material CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/material.min.css'); ?>">
  <!-- Ripples CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/ripples.min.css'); ?>">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/owl.carousel.css'); ?>">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/magnific-popup.css'); ?>">
  <!-- Slicknav CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/slicknav.css'); ?>">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/animate.css'); ?>">
  <!-- Style CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/style.css'); ?>">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/assets/css/responsive.css'); ?>">


  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/assets/css/colors/indigo.css'); ?>" media="screen" />


  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

  <!-- === Tambahan CSS Halaman Admin Edit Berita === -->
<link href="<?php echo base_url('assets/backend/assets/css/csstambahan/layout-tambahan.css'); ?>" rel="stylesheet">

</head>

<body>

  <!-- Header Start -->
  <header id="header">
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar nav-bg">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="mdi mdi-menu"></span>
            <span class="mdi mdi-menu"></span>
            <span class="mdi mdi-menu"></span>
          </button>
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a> -->
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <a href="<?php echo base_url('/'); ?>">
          <img class="" width="70" src="<?php echo site_url('assets/frontend/assets/images/puprpb.png'); ?>">            
          </a>
            <a href="<?php echo base_url('/'); ?>">
          <h6 class="text-bold">SELAMAT DATANG DI SISTEM INFORMASI INFRASTRUKTUR SDA PUPR PAPUA BARAT</h6> </a>
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url(); ?>">
                Beranda
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('profil'); ?>">
                Profil
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('berita'); ?>">
                Berita
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('galeri'); ?>">
                Galeri
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('lapor'); ?>">
                Lapor
              </a>
            </li>
          </ul>
          <!-- Search Box Start -->
<!--           <div class="search-icon">
            <span class="open-search">
              <i class="mdi mdi-magnify btn btn-common"></i>
            </span>
          </div> -->
          <form role="search" class="navbar-form">
            <div class="container">
              <div class="row">
                <div class="form-group has-feedback">
                  <input type="text" placeholder="Type and search ..." class="form-control">
                  <div class="close"><i class="mdi mdi-close"></i></div>
                </div>
              </div>
            </div>
          </form>
          <!-- Search Box End -->
        </div>
      </div>
      <!-- Mobile Menu Start -->
      <ul class="wpb-mobile-menu">

        <li>
          <a class="active" href="<?php echo site_url(); ?>">
            Beranda
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('profil'); ?>">
            Profil
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('berita'); ?>">
            Berita
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('galeri'); ?>">
            Galeri
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('lapor'); ?>">
            Lapor
          </a>
        </li>

      </ul>
      <!-- Mobile Menu End -->
    </nav>
  </header>
  <!-- Header End -->

  <?php
  if (isset($_view) && $_view)
    $this->load->view($_view);
  ?>

  <!--Footer-->
  <footer class="page-footer center-on-small-only  pt-0 footer-widget-container">
    <!--Footer Links-->
    <div class="container pt-5 mb-5">
      <div class="row">
        <!--First column-->
        <div class="col-md-6 col-lg-4 col-xl-4 footer-contact-widget">
          <h3 class="footer-title">Tentang SISDA-PABAR</h3>
          <p>Sistem Informasi Infrastruktur Sumber Daya Air Provinsi Papua Barat. Mengikutsertakan masyarakat dalam pembangunan infrastruktur sumber daya air (Sungai, Irigasi, dan Pantai).</p>
          <ul>
            <li>
              <a href="https://www.facebook.com/"><i class="mdi mdi-facebook"></i></a>
            </li>
            <li>
              <a href="https://twitter.com/"><i class="mdi mdi-twitter"></i></a>
            </li>
            <li>
              <a href="https://www.youtube.com/"><i class="mdi mdi-youtube-play"></i></a>
            </li>
          </ul>
        </div>
        <!--/.First column-->

        <!--Second column-->
        <div class="col-md-6 col-lg-4 col-xl-4 recent-widget">
          <h3 class="footer-title">Alamat</h3>
          <p>Jalan Brigjen Marinir (Pern.) Abraham O. Atururi, Arfai - Manokwari.</p>
        </div>
        <!--/.Second column-->

        <div class="col-md-6 col-lg-4 col-xl-4 recent-widget">
          <h3 class="footer-title">Instansi Terkait</h3>
          <p><a class="dark-grey-text" href="https://www.dpupapuabarat.com/" target="_blank">Dinas PU Papua Barat</a></p>
          <p><a class="dark-grey-text" href=" https://lpse.pu.go.id/" target="_blank">LPSE PUPR</a></p>
          <p><a class="dark-grey-text" href="https://www.pu.go.id/" target="_blank">Kementerian PUPR</a></p>
          <p><a class="dark-grey-text" href="https://sda.pu.go.id/" target="_blank">Dirjen SDA PUPR</a></p>
        </div>
        <!--/.Fourth column-->

      </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>&copy; 2021 SISDA PABAR | Powered By Underground Dev.</p>
          </div>
        </div>
      </div>
    </div>
    <!--/.Copyright -->

  </footer>
  <!--/.Footer-->


  <!-- Back To Top -->
  <a href="#" class="back-to-top">
    <div class="ripple-container"></div>
    <i class="mdi mdi-arrow-up">
    </i>
  </a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="loader" id="loader-1"></div>
  </div>
  <!-- End Preloader -->

  <!-- Optional JavaScript -->
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/jquery-min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/jquery.mixitup.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/jquery.inview.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/jquery.counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/scroll-top.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/smoothscroll.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/material.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/ripples.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/form-validator.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/contact-form-script.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/wow.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/jquery.vide.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/jquery.slicknav.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/main.js"></script>

</body>

</html>