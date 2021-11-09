<style>
  @media (max-width: 767px) {
    #beritalatest .col-md-6.col-lg-6.col-xl-6 {
      width: 100%;
      max-width: 100%;
      margin: 0;
    }

    .row.listberita .col-sm-8,
    .row.listberita .col-md-4 {
      padding-left: 0 !important;
      padding-right: 0 !important;
      width: 100%;
      max-width: 100%;
      margin: 0;
      min-width: 100%;
    }

    section#beritalatest .col-md-4 img {
      object-fit: cover;
      margin: 6px 5% 0 5% !important;
      width: 90%;
    }

    .single-blog-post .post-meta {
      padding: 0 20px 10px 20px;
    }

    .carousel-item img {
      height: 250px !important;
      object-fit: cover;
    }

    .section-title {
      font-size: 20px;
      position: initial;
      margin-bottom: 0;
      margin-top: 30px;
    }

    .single-blog-post {
      margin-top: 16px;
      margin-bottom: 0;
    }

    .section-title::before {
      background-color: #5166d8;
      display: none;
    }

    .section-title {
      font-size: 24px;
      position: initial;
      margin-bottom: 0;
      margin-top: 30 px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 0 !important;
    }

    .col-md-12.col-lg-12.col-xs-12 {
      padding: 0;
    }
  }
</style>
<!-- Slider Section -->
<section class="slider-section">
  <div class="container-slider">
    <div class="row justify-content-between">
      <div class="col-md-12 col-lg-12 col-xs-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <?php foreach ($slider as $s) : ?>
              <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $s->id; ?>"></li>
            <?php endforeach; ?>
          </ol>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 default_slider" src="<?php echo base_url('assets/frontend/assets/images/default_slider.jpg')  ?>" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h2>SELAMAT DATANG DI<br>SISTEM INFORMASI INFRASTRUKTUR SDA PAPUA BARAT</h2>
                <a href="<?php echo site_url('lapor'); ?>" class="animated4 btn btn-common">Buat Laporan Sekarang</a>
                <!-- <p>...</p> -->
              </div>
            </div>
            <?php foreach ($slider as $s) : ?>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url('upload/berita/') . $s->nama_file; ?>" alt="Third slide">
                <?php
                $CI = &get_instance();
                $CI->load->model('M_berita');
                $sid = $CI->M_berita->get_by_id($s->idberita);
                ?>
                <div class="carousel-caption d-none d-md-block">
                  <a href="<?php echo site_url('berita/detail/') . $sid->slug; ?>" class="animated4 btn btn-common">Baca Selengkapnya</a>
                  <!-- <p>...</p> -->
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Slider secction -->


<!-- Our BLog Section -->
<section id="beritalatest" class="Material-blog-section section-padding">
  <div class="container">
    <div class="row">
      <!-- Single Article -->
      <div class="col-md-6 col-lg-6 col-xl-6" data-wow-delay=".3s">
        <h1 class="section-title text-center">List Berita</h1>
        <div class="row listberita">
          <div class="col-md-12">
            <?php foreach ($berita as $b) : ?>

              <div class="row">
                <article class="single-blog-post">
                  <div class="row">
                    <div class="col-md-4">
                      <?php
                      $CI = &get_instance();
                      $CI->load->model('M_berita');
                      $gb = $CI->M_berita->get_image($b->id);
                      ?>
                      <a href="<?php echo site_url('berita/detail/') . url_title($b->judul, 'dash', true); ?>"><img src="<?php echo base_url('upload/berita/') . $gb->nama_file; ?>" width="80%" height="80%"></a>

                    </div>
                    <div class="col-sm-8">
                      <div class="post-meta">
                        <!-- Title -->
                        <a href="<?php echo site_url('berita/detail/') . url_title($b->judul, 'dash', true); ?>">
                          <h2 class="subtitle m-0"><?php echo $b->judul; ?></h2>
                        </a>
                        <p><?php echo word_limiter($b->isi, 30); ?></p>
                        <p class="small-text d-flex justify-content-end"><i><?php echo $b->tanggal; ?></i></p>
                      </div>
                    </div>
                  </div>

                </article>
              </div>

            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Single Article -->
      <div class="col-md-6 col-lg-6 col-xl-6" data-wow-delay=".4s">
        <h1 class="section-title text-center">Laporan Terkini</h1>
        <div class="row laporanterkini">
          <div class="col-md-12">
            <?php foreach ($pengaduan as $p) : ?>
              <div class="row">
                <article class="single-blog-post">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="post-meta">
                        <!-- Title -->
                        <h2 class="subtitle mt-0"><?php echo $p->nama_ruasjalan; ?></h2>
                        <p><?php echo word_limiter($p->isi_laporan, 30); ?></p>
                        <p class="small-text d-flex justify-content-start"><i><?php echo $p->tgl_laporan; ?></i></p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <?php
                      $CI = &get_instance();
                      $CI->load->model('M_pengaduan');
                      $u = $CI->M_pengaduan->get_image($p->kodelaporan);
                      ?>
                      <?php if ($gb) { ?>
                        <img width="80%" height="80%" src="<?php echo base_url('upload/berita/') . $gb->nama_file; ?>" alt="">
                      <?php } else { ?>
                        <img width="80%" height="80%" src="<?php echo base_url('upload/berita/noimageavail.jpg'); ?>" alt="">
                      <?php } ?>
                    </div>
                  </div>
                </article>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- Our BLog Section End -->

<!-- work-counter area -->
<section id="laporanmasuk" class="work-counter-section section-padding">
  <div class="container">
    <h1 class="section-title text-center">Jumlah Laporan</h1>
    <div class="row">
      <!-- Single Counter -->
      <div class="col-md-4 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".2s">
        <div class="counter">
          <div class="icon">
            <img class="img-thumbnail" src="https://sda.pu.go.id/assets/uploads/gallery/a6fc3-picture18.png">
          </div>
          <div class="timer"><?php echo $count_irigasi; ?></div>
          <p>Irigasi</p>
        </div>
      </div>
      <!-- Single Counter -->
      <div class="col-md-4 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".3s">
        <div class="counter">
          <div class="icon">
            <img class="img-thumbnail" src="https://sda.pu.go.id/assets/uploads/gallery/423b1-picture13.jpg">
          </div>
          <div class="timer"><?php echo $count_sungai; ?></div>
          <p>Sungai</p>
        </div>
      </div>
      <!-- Single Counter -->
      <div class="col-md-4 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".4s">
        <div class="counter">
          <div class="icon">
            <img class="img-thumbnail" src="https://sda.pu.go.id/assets/uploads/gallery/9cafc-picture20.jpg">
          </div>
          <div class="timer"><?php echo $count_pantai; ?></div>
          <p>Pantai</p>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- work-counter area end -->