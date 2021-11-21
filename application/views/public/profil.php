<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

<!-- === Tambahan CSS Halaman Admin Edit Berita === -->
<link href="<?php echo base_url('assets/backend/assets/css/csstambahan/profil.css'); ?>" rel="stylesheet">

<!-- Welcome Section Start -->
<section id="halprofil" class="welcome-section section-padding section-dark">
  <div class="container">

    <div class="row">
      <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
        <h1 class="section-title">Profil</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-6 col-xs-12">
        <div class="Material-tab mb-3">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#latar_belakang" role="tab">Latar Belakang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tujuan" role="tab">Tujuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#manfaat" role="tab">Manfaat</a>
            </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="latar_belakang" role="tabpanel">
              <ul>
                <li>Luas wilayah Provinsi Papua Barat sangat luas.</li>
                <li>Terbatasnya konektifitas antar wilayah Kab/Kota sehingga Masyarakat kesulitan menyampaikan usulan program/aduan. </li>
                <li>Sulitnya mendapatkan informasi infrastruktur sehingga ada stigma pembangunan kurang tepat sasaran.</li>
              </ul>
            </div>
            <div class="tab-pane fade" id="tujuan" role="tabpanel">
              <ul>
                <li>Mendapatkan data laporan masyarakat secara cepat dan sesuai kondisi tekini dengan memanfaatkan TI.</li>
                <li>Menentukan Kebijakan dalam Penentuan Program Prioritas.</li>
                <li>Menyelenggarakan Pemerintahan yang efektif dan akuntabel dalam Bidang Pembangunan Infrastruktur SDA.</li>
              </ul>
            </div>
            <div class="tab-pane fade" id="manfaat" role="tabpanel">
              <ul>
                <li>Mempermudah Masyarakat Mendapatkatkan Informasi Pembangunan Infrastruktur SDA di Provinsi Papua Barat.</li>
                <li>Memutus birokrasi yang berbelit-belit dalam menyampaikan usulan program/aduan serta menghindarkan Konflik Kepentingan.</li>
                <li>Mempermudah Penyelenggara Infrastruktur dalam Menyusun Program Kerja.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-xs-12">
        <div class="Material-tab mb-3 lightbox-gallery">
          <div class="tab-content">
            <!-- <img width="100%" src="<? // echo base_url();
                                        ?>assets/frontend/assets/images/kinerja_pelayanan.png"> -->

            <div id="sliderContol" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <a href="<?php echo base_url(); ?>assets/frontend/assets/images/kinerja_pelayanan.png" data-toggle="lightbox" data-title="A random title" data-gallery="example-gallery" data-footer="A custom footer text">
                    <img src="<?php echo base_url(); ?>assets/frontend/assets/images/kinerja_pelayanan.png" class="img-fluid">
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="<?php echo base_url(); ?>assets/frontend/assets/images/daerah_irigasi.png" data-toggle="lightbox" data-title="A random title" data-gallery="example-gallery" data-footer="A custom footer text">
                    <img src="<?php echo base_url(); ?>assets/frontend/assets/images/daerah_irigasi.png" class="img-fluid">
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="<?php echo base_url(); ?>assets/frontend/assets/images/daerah_irigasi1.png" data-toggle="lightbox" data-title="A random title" data-gallery="example-gallery" data-footer="A custom footer text">
                    <img src="<?php echo base_url(); ?>assets/frontend/assets/images/daerah_irigasi1.png" class="img-fluid">
                  </a>
                </div>
              </div>
              <a class="carousel-control-prev" href="#sliderContol" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#sliderContol" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <span class="close">&times;</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Welcome Section End -->

<script>
  // Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>