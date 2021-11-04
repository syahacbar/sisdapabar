 <!-- Call to action Section -->

    <!-- Slider Section -->
    <section class="slider-section">
      <div class="container-slider">
          <div class="row justify-content-between">
              <div class="col-md-12 col-lg-12 col-xs-12">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="https://preview.uideck.com/items/material/assets/images/slider/slider-bg3.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                          <button class="animated4 btn btn-common">Buat Laporan Sekarang</button>
                          <!-- <p>...</p> -->
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://preview.uideck.com/items/material/assets/images/slider/slider-bg2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                          <button class="animated4 btn btn-common">Buat Laporan Sekarang</button>
                          <!-- <p>...</p> -->
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://preview.uideck.com/items/material/assets/images/slider/slider-bg1.jpg" alt="Third slide">
                      </div>
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
                  <?php foreach($berita AS $b) : ?>
                  <div class="row">
                    <article class="single-blog-post">
                      <div class="row">
                          <div class="col-md-4">
                            <?php
                              $CI =& get_instance();
                              $CI->load->model('M_berita');
                              $gb= $CI->M_berita->get_image($b->id);
                            ?>
                              <img src="<?php echo base_url('upload/berita/').$gb->nama_file; ?>" width="80%" height="80%">

                          </div>
                          <div class="col-sm-8">
                            <div class="post-meta">
                                <!-- Title -->
                                <h2 class="subtitle m-0"><?php echo $b->judul;?></h2>
                                 <p><?php echo word_limiter($b->isi, 30);?></p>
                                 <p class="small-text d-flex justify-content-end"><i><?php echo $b->tanggal;?></i></p>
                            </div>    
                          </div>
                      </div>
                        <!-- Post Meta -->

                    </article>
                  </div>
                  <?php endforeach;?>
                </div>
              </div>
            </div>

            <!-- Single Article -->
            <div class="col-md-6 col-lg-6 col-xl-6" data-wow-delay=".4s">
              <h1 class="section-title text-center">Laporan Terkini</h1>
              <div class="row laporanterkini">
                <div class="col-md-12">
                  <?php foreach($pengaduan AS $p) : ?>
                  <div class="row">
                    <article class="single-blog-post">
                      <div class="row">
                          <div class="col-md-8">
                            <div class="post-meta">
                                <!-- Title -->
                                <h2 class="subtitle mt-0"><?php echo $p->nama_ruasjalan;?></h2>
                                 <p><?php echo word_limiter($p->isi_laporan, 30);?></p>
                                 <p class="small-text d-flex justify-content-start"><i><?php echo $p->tgl_laporan;?></i></p>
                            </div>    
                          </div>
                          <div class="col-md-4">
                            <?php
                              $CI =& get_instance();
                              $CI->load->model('M_pengaduan');
                              $u= $CI->M_pengaduan->get_image($p->kodelaporan);
                            ?>
                              <img src="<?php echo base_url('upload/dokumentasi/').$u->nama_file;?>" width="80%" height="80%">
                          </div>
                      </div>
                    </article>
                  </div>
                  <?php endforeach;?>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- Our BLog Section End -->

    <!-- work-counter area -->
    <section id="laporanmasuk" class="work-counter-section section-padding">
        <div class="container">
            <div class="row">
                <!-- Single Counter -->
                <div class="col-md-4 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".2s">
                    <div class="counter">
                        <div class="icon">
                          <img class="img-thumbnail" src="https://sda.pu.go.id/assets/uploads/gallery/a6fc3-picture18.png">
                        </div>
                        <div class="timer">347</div>
                        <p>Irigasi</p>
                    </div>
                </div>
                <!-- Single Counter -->
                <div class="col-md-4 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".3s">
                    <div class="counter">
                        <div class="icon">
                          <img class="img-thumbnail" src="https://sda.pu.go.id/assets/uploads/gallery/423b1-picture13.jpg">
                        </div>
                        <div class="timer">8896</div>
                        <p>Sungai</p>
                    </div>
                </div>
                <!-- Single Counter -->
                <div class="col-md-4 col-sm-6 work-counter-widget text-center wow animated fadeInUp" data-wow-delay=".4s">
                    <div class="counter">
                        <div class="icon">
                          <img class="img-thumbnail" src="https://sda.pu.go.id/assets/uploads/gallery/9cafc-picture20.jpg">
                        </div>
                        <div class="timer">35</div>
                        <p>Pantai</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- work-counter area end -->