<style>
  section.Material-blog-section.section-padding.mt-5 .container {
    margin-top: 7rem;
  }

  .row {
    margin: 10px -16px;
  }

  /* Create three equal columns that floats next to each other */
  .column {
    float: left;
    width: 33.33%;
    display: none;
    /* Hide all elements by default */
  }

  figure.single-portfolio img {
    height: 150px;
    object-fit: cover;
    object-position: center;
  }

  /* Clear floats after rows */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Content */
  .single-portfolio {
    background-color: white;
    padding: 10px;
  }

  /* The "show" class is added to the filtered elements */
  .show {
    display: block;
  }

  #myBtnContainer .btn.active {
    padding: 10px;
    margin: 5px;
    background: #2196f3;
    color: #fff;
    -webkit-box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
  }

  #filterGaleri button.btn {
    padding: 10px 15px !important;
    background-color: #ecf0f6;
    text-transform: capitalize;
  }

  .column.irigasi.col-md-4.show {
    padding: 0;
  }

  .subtitle {
    font-size: 18px !important;
    padding-right: 50px;
  }

  .col-md-6.col-sm-6 {
    width: 50% !important;
  }

  @media (max-width: 767px) {
    .section-title::before {
      display: none;
    }

    .col-md-6.col-sm-4 {
      width: 30% !important;
      max-width: 30% !important;
    }

    .section-title {
      font-size: 20px;
      position: initial;
      margin-bottom: 0;
    }

    .column.irigasi.col-lg-4.col-md-4.col-sm-6.col-xs-12.show {
      width: 50%;
    }

    .column.sungai.show {
      width: 50%;
    }

    .column.pantai.show {
      width: 50%;
    }

    .subtitle {
      font-size: 12px !important;
      padding-right: 15px;
      line-height: 1.5;
    }

    figcaption.hover-content {
      padding: 0;
    }

    a.btn.btn-round.btn-fab.btn-xs {
      display: none;
    }

  }
</style>
</head>

<body>

  <!-- MAIN (Center website) -->
  <section class="Material-blog-section section-padding mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-4" data-wow-delay=".2s">
          <h1 class="section-title">Galeri</h1>
        </div>
        <div class="col-md-6 col-sm-8" data-wow-delay=".2s">
          <div id="filterGaleri">
            <button class="btn active" onclick="filterSelection('semua')"> Semua</button>
            <button class="btn" onclick="filterSelection('irigasi')"> Irigasi</button>
            <button class="btn" onclick="filterSelection('sungai')"> Sungai</button>
            <button class="btn" onclick="filterSelection('pantai')"> Pantai</button>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="row d-flex">
            <?php foreach ($galeri_irigasi as $gi) : ?>

              <div class="column irigasi col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <figure class="single-portfolio">
                  <?php
                  $CI = &get_instance();
                  $CI->load->model('M_berita');
                  $gb = $CI->M_berita->get_image($gi->id);
                  ?>

                  <div class="featured-image">
                    <?php if ($gb) { ?>
                      <img width="100" height="150" src="<?php echo base_url('upload/berita/') . $gb->nama_file; ?>" alt="">
                    <?php } else { ?>
                      <img width="100" height="150" src="<?php echo base_url('upload/berita/noimageavail.jpg'); ?>" alt="">
                    <?php } ?>

                  </div>
                  <figcaption class="hover-content">
                    <a class="btn btn-round btn-fab btn-xs" href="<?php echo site_url('berita/detail/') . url_title($gi->judul, 'dash', true); ?>"><i class="material-icons mdi mdi-arrow-right"></i>
                      <div class="ripple-container"></div>
                    </a>
                    <a href="<?php echo site_url('berita/detail/') . url_title($gi->judul, 'dash', true); ?>">
                      <h1 class="subtitle"><?php echo $gi->judul; ?></h1>
                    </a>
                  </figcaption>
                </figure>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="row">
            <?php foreach ($galeri_sungai as $gs) : ?>
              <div class="column sungai">
                <figure class="single-portfolio">
                  <?php
                  $CI = &get_instance();
                  $CI->load->model('M_berita');
                  $gb = $CI->M_berita->get_image($gs->id);
                  ?>
                  <div class="featured-image">
                    <?php if ($gb) { ?>
                      <img width="100" height="150" src="<?php echo base_url('upload/berita/') . $gb->nama_file; ?>" alt="">
                    <?php } else { ?>
                      <img width="100" height="150" src="<?php echo base_url('upload/berita/noimageavail.jpg'); ?>" alt="">
                    <?php } ?>

                  </div>
                  <figcaption class="hover-content">
                    <a class="btn btn-round btn-fab btn-xs" href="<?php echo site_url('berita/detail/') . url_title($gs->judul, 'dash', true); ?>"><i class="material-icons mdi mdi-arrow-right"></i>
                      <div class="ripple-container"></div>
                    </a>
                    <a href="<?php echo site_url('berita/detail/') . url_title($gs->judul, 'dash', true); ?>">
                      <h2 class="subtitle"><?php echo $gs->judul; ?></h2>
                    </a>
                  </figcaption>
                </figure>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="row">
            <?php foreach ($galeri_sungai as $gp) : ?>
              <div class="column pantai">
                <figure class="single-portfolio">
                  <?php
                  $CI = &get_instance();
                  $CI->load->model('M_berita');
                  $gb = $CI->M_berita->get_image($gp->id);
                  ?>
                  <div class="featured-image">
                    <?php if ($gb) { ?>
                      <img width="100" height="150" src="<?php echo base_url('upload/berita/') . $gb->nama_file; ?>" alt="">
                    <?php } else { ?>
                      <img width="100" height="150" src="<?php echo base_url('upload/berita/noimageavail.jpg'); ?>" alt="">
                    <?php } ?>

                  </div>
                  <figcaption class="hover-content">
                    <a class="btn btn-round btn-fab btn-xs" href="<?php echo site_url('berita/detail/') . url_title($gp->judul, 'dash', true); ?>"><i class="material-icons mdi mdi-arrow-right"></i>
                      <div class="ripple-container"></div>
                    </a>
                    <a href="<?php echo site_url('berita/detail/') . url_title($gp->judul, 'dash', true); ?>">
                      <h2 class="subtitle"><?php echo $gp->judul; ?></h2>
                    </a>
                  </figcaption>
                </figure>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
  </section>

  <script>
    filterSelection("semua")

    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "semua") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
          element.className += " " + arr2[i];
        }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }


    // Add active class to the current button (highlight it)
    // var btnContainer = document.getElementById("myBtnContainer");
    // var btns = btnContainer.getElementsByClassName("btn");
    // for (var i = 0; i < btns.length; i++) {
    //   btns[i].addEventListener("click", function(){
    //     var current = document.getElementsByClassName("active");
    //     current[0].className = current[0].className.replace(" active", "");
    //     this.className += " active";
    //   });
    // }
  </script>