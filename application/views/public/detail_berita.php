<!-- === Tambahan CSS Halaman Admin Edit Berita === -->
<link href="<?php echo base_url('assets/backend/assets/css/csstambahan/detail-berita.css'); ?>" rel="stylesheet">

    <!-- Our BLog Section -->
    <section class="Material-blog-section section-padding mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <!-- Single Article -->
                        <div class="col-md-12 col-lg-12 col-xl-12 wow animated fadeInUp" data-wow-delay=".3s">
                            <article class="single-blog-post">
                                <!-- Featured Image -->
                                <div class="featured-image">
                                    <?php
                                    $CI = &get_instance();
                                    $CI->load->model('M_berita');
                                    $gb = $CI->M_berita->get_image($detail->id);
                                    ?>
                                    <?php if ($gb) { ?>
                                        <img src="<?php echo base_url('upload/berita/') . $gb->nama_file; ?>" alt="">
                                    <?php } else { ?>
                                        <img src="<?php echo base_url('upload/berita/noimageavail.jpg'); ?>" alt="">
                                    <?php } ?>
                                </div>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <!-- Title -->
                                    <h2 class="subtitle"><?php echo $detail->judul; ?></h2>
                                    <p align-item="justify"><?php echo $detail->isi; ?></p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 single-sidebar-widget flickr-widget no-padding wow animated fadeInUp animated">
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