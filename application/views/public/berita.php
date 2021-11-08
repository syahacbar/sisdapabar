    <style>
        section.Material-blog-section.section-padding.mt-5 .container {
            padding: 0;
            margin: 0 5%;
            width: 90%;
            min-width: 90%;
        }

        .sidebar-widget-title {
            background: #5065d8;
            padding: 0;
        }

        ul.categories-list {
            list-style: none;
            padding-left: 10px;
        }

        ul.categories-list li {
            margin: 10px 0;
        }

        ul.categories-list li a {
            color: #333;

        }

        ul.categories-list li a:hover {
            color: #5065d8;
        }


        .sidebar-widget-title h2 {
            font-size: 18px;
            display: flex;
            justify-content: start;
            align-items: center;
            bottom: 0;
            top: 0;
            margin: 0;
        }

        .sidebar-widget-title {
            background: #5065d8;
            padding: 0;
            color: #fff;
            padding: 10px;
            font-size: 18px !important;
        }

        #berita .featured-image img {
            object-fit: cover;
        }

        section#halberita .container {
            margin-top: 7rem;
        }
    </style>

    <!-- Our BLog Section -->
    <section id="halberita" class="Material-blog-section section-padding mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                    <h1 class="section-title">Berita</h1>
                </div>
            </div>

            <div id="berita" class="row">
                <div class="col-md-10">
                    <div class="row">
                        <!-- Single Article -->
                        <?php foreach ($berita as $news) : ?>
                            <div class="col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp" data-wow-delay=".3s">
                                <article class="single-blog-post">
                                    <!-- Featured Image -->
                                    <?php
                                    $CI = &get_instance();
                                    $CI->load->model('M_berita');
                                    $gb = $CI->M_berita->get_image($news->id);
                                    ?>
                                    <div class="featured-image">
                                        <a href="<?php echo site_url('berita/detail/') . url_title($news->judul, 'dash', true); ?>">
                                            <?php if ($gb) { ?>
                                                <img width="100" height="150" src="<?php echo base_url('upload/berita/') . $gb->nama_file; ?>" alt="">
                                            <?php } else { ?>
                                                <img width="100" height="150" src="<?php echo base_url('upload/berita/noimageavail.jpg'); ?>" alt="">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <!-- Title -->
                                        <a href="<?php echo site_url('berita/detail/') . url_title($news->judul, 'dash', true); ?>">
                                            <h2 class="subtitle"><?php echo $news->judul; ?></h2>
                                        </a>
                                        <p><?php echo word_limiter($news->isi, 20) ?></p>
                                    </div>
                                    <div class="meta-tags">
                                        <span class="comments"><a href="<?php echo site_url('berita/detail/') . url_title($news->judul, 'dash', true); ?>"><i class="mdi mdi-calendar"></i> <?php echo $news->tanggal; ?></a></span>
                                        <!-- Read More -->
                                        <a class="btn btn-round btn-fab" href="<?php echo site_url('berita/detail/') . url_title($news->judul, 'dash', true); ?>"><i class="material-icons mdi mdi-arrow-right"></i>
                                            <div class="ripple-container"></div>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-md-2 single-sidebar-widget flickr-widget no-padding wow animated fadeInUp animated">
                    <div class="sidebar-widget-title">
                        <h2>Kategori Berita</h2>
                    </div>

                    <ul class="categories-list">
                        <?php foreach ($list_kategori as $cat) : ?>
                            <li><a href="<?php echo site_url('berita/kategori/') . url_title($cat->kategori, 'dash', true); ?>"><?php echo $cat->kategori . " (" . $cat->jumlah . ")"; ?></a></li>
                        <?php endforeach; ?>
                        <li><a href="<?php echo site_url('berita'); ?>">Semua Berita</a></li>
                    </ul>
                </div>
            </div>


        </div>
    </section>
    <!-- Our BLog Section End -->