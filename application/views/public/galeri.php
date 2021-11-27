<!-- === Tambahan CSS Halaman Admin Edit Berita === -->
<link href="<?php echo base_url('assets/backend/assets/css/csstambahan/galeri.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/backend/assets/css/csstambahan/publik-galeri.css'); ?>" rel="stylesheet">


  <section class="Material-blog-section section-padding mt-5">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-4" data-wow-delay=".2s">
          <h1 class="section-title">Galeri</h1>
        </div>
        <div class="col-md-6 col-sm-8">
            <button class="btn btn-primary filter-button" data-filter="all">Semua</button>
            <button class="btn btn-default filter-button" data-filter="photo">Sungai</button>
            <button class="btn btn-default filter-button" data-filter="graphic">Irigasi</button>
            <button class="btn btn-default filter-button" data-filter="webdesign">Pantai</button>
        </div>
    </div>

    <div class="row">
        <?php foreach ($galeri_sungai as $gs) : ?>
        <div class="col-md-3 filter photo">
          <?php
          $CI = &get_instance();
          $CI->load->model('M_berita');
          $gb = $CI->M_berita->get_image($gs->id);
          ?>
            <div class="each-item">
                    <?php if ($gb) { ?>
                      <img class="port-image" width="100" height="150" src="<?php echo base_url('upload/berita/') . $gb->nama_file; ?>" alt="">
                    <?php } else { ?>
                      <img class="port-image" width="100" height="150" src="<?php echo base_url('upload/berita/noimageavail.jpg'); ?>" alt="">
                    <?php } ?>

                <div class="cap1">
                    <a href="<?php echo site_url('berita/detail/') . url_title($gs->judul, 'dash', true); ?>">
                        <h5><?php echo $gs->judul; ?></h5>
                    </a>
                    
                </div>
                <div class="cap2">
                    <a href="<?php echo site_url('berita/detail/') . url_title($gs->judul, 'dash', true); ?>" class="text-center">Detail</a><i class="material-icons mdi mdi-arrow-right"></i>
                </div> 
            </div>
        </div>
        <?php endforeach; ?>
        
        <?php foreach ($galeri_irigasi as $gi) : ?>
        <div class="col-md-3 filter graphic">
          <?php
          $CI = &get_instance();
          $CI->load->model('M_berita');
          $gb = $CI->M_berita->get_image($gi->id);
          ?>
            <div class="each-item">
                   <?php if ($gb) { ?>
                      <img class="port-image" width="100" height="150" src="<?php echo base_url('upload/berita/') . $gb->nama_file; ?>" alt="">
                    <?php } else { ?>
                      <img class="port-image" width="100" height="150" src="<?php echo base_url('upload/berita/noimageavail.jpg'); ?>" alt="">
                    <?php } ?>
                <div class="cap1">
                    <a href="<?php echo site_url('berita/detail/') . url_title($gi->judul, 'dash', true); ?>">
                        <h5><?php echo $gi->judul; ?></h5>
                    </a>
                </div>
                <div class="cap2">
                    <a href="<?php echo site_url('berita/detail/') . url_title($gi->judul, 'dash', true); ?>" class="text-center">Detail</a><i class="material-icons mdi mdi-arrow-right"></i>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        
        <?php foreach ($galeri_pantai as $gp) : ?>
        <div class="col-md-3 filter webdesign">
            <div class="each-item">
                    <?php if ($gb) { ?>
                      <img class="port-image" width="100" height="150" src="<?php echo base_url('upload/berita/') . $gb->nama_file; ?>" alt="">
                    <?php } else { ?>
                      <img class="port-image" width="100" height="150" src="<?php echo base_url('upload/berita/noimageavail.jpg'); ?>" alt="">
                    <?php } ?>
                <div class="cap1">
                    <a href="<?php echo site_url('berita/detail/') . url_title($gp->judul, 'dash', true); ?>">
                        <h5><?php echo $gp->judul; ?></h5>
                    </a>
                </div>
                <div class="cap2">
                    <a href="<?php echo site_url('berita/detail/') . url_title($gp->judul, 'dash', true); ?>" class="text-center">Detail</a><i class="material-icons mdi mdi-arrow-right"></i>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</section>


<script>
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

});
</script>