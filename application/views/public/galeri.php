<!-- === Tambahan CSS Halaman Admin Edit Berita === -->
<link href="<?php echo base_url('assets/backend/assets/css/csstambahan/galeri.css'); ?>" rel="stylesheet">


<style>

 .port-image
{
    width: 100%;
}

.col-md-3
{
    margin-bottom:20px;
}

.each-item
{
    position:relative;
    overflow:hidden;
}

.each-item:hover .cap2, .each-item:hover .cap1
{
    left:0px;
}

.cap1
{
    position:absolute;
    width:100%;
    height:70%;
    background: #fff;
    top:0px;
    left:-100%;
    padding:10px;
    
    transition: all .5s;
}

.cap2 {
    position: absolute;
    width: 100%;
    height: 30%;
    background: #231757;
    bottom: 0px;
    left: 100%;
    padding: 10px;
    transition: all .5s;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.cap2 a {
    font-size: 18px;
    font-weight: bold;
    color: #f2cf04;
}

section.Material-blog-section.section-padding.mt-5 button {
    padding: 10px 15px !important;
}

.cap1 h5 {
    font-weight: bold;
}

.material-icons {
    font-size: 24px;
    line-height: 1;
    border-radius: 5px;
    background-color: #f2cf04;
    width: 60px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #231757;
}
</style>

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