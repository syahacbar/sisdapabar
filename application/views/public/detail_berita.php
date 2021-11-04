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
    </style>
    <!-- Page Titile Area -->
    <!-- <section class="page-title-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-center">
                        <div class="title-middle">
                            <h1 class="page-title"></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Page Titile Area End -->

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
                                  $CI =& get_instance();
                                  $CI->load->model('M_berita');
                                  $gb= $CI->M_berita->get_image($detail->id);
                                ?>
                                    <img src="<?php echo base_url('upload/berita/').$gb->nama_file; ?>" alt="">
                                
                            </div>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <!-- Title -->
                                <h2 class="subtitle"><?php echo $detail->judul;?></h2>
                                 <p align="justify"><?php echo $detail->isi;?></p>
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
                    <?php foreach($list_kategori AS $cat) : ?>
                        <li><a href="<?php echo site_url('berita/kategori/').url_title($cat->kategori,'dash',true); ?>"><?php echo $cat->kategori." (".$cat->jumlah.")";?></a></li>
                    <?php endforeach;?>
                    <li><a href="<?php echo site_url('berita'); ?>">Semua Berita</a></li>
                    </ul>
            </div>
        </div>


      </div>
    </section>
    <!-- Our BLog Section End -->


