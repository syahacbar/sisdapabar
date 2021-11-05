<style>
  section.welcome-section.section-padding.section-dark .container {
      margin-top: 7rem;
  }

.Material-tab ul.nav.nav-tabs {
    padding: 0px 25px;
    background: #fff;
    text-align: center;
    border-bottom: 0;
    box-shadow: 0 1px 4px rgb(0 0 0 / 26%);
    justify-content: start !important;
    padding: 0;
}

.Material-tab ul.nav.nav-tabs .nav-item .nav-link {
    font-size: 13px;
    padding: 14px 5px;
    padding: 15px 20px !important;
}

.Material-tab .nav-tabs .nav-item {
    font-size: 15px;
    color: #333;
    background-color: #eee;
    padding: 0;
    margin: 5px;
    display: block;
    border-radius: 2px;
    text-transform: capitalize;
    cursor: pointer;
}

.Material-tab li.nav-item a {
    padding: 0 20px !important;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 0 !important;
    margin: 0 !important;
}

section#halprofil .container {
    margin-top: 7rem;
}

#sliderContol img {
  width: 100%;
  object-fit: contain;
  height: auto !important;
}

</style>

    <!-- Welcome Section Start -->
    <section id="halprofil" class="welcome-section section-padding section-dark">
      <div class="container">

        <div class="row">
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Profil</h1>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-lg-4 col-xs-12">
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
                  <p>Luas wilayah Provinsi Papua Barat sangat luas. Terbatasnya konektifitas antar wilayah Kab/Kota sehingga Masyarakat kesulitan menyampaikan usulan program/aduan. Sulitnya mendapatkan informasi infrastruktur sehingga ada stigma pembangunan kurang tepat sasaran.</p>
                </div>
                <div class="tab-pane fade" id="tujuan" role="tabpanel" >
                  <p>Mendapatkan data laporan masyarakat secara cepat dan sesuai kondisi tekini dengan memanfaatkan TI. Menentukan Kebijakan dalam Penentuan Program Prioritas. Menyelenggarakan Pemerintahan yang efektif dan akuntabel dalam Bidang Pembangunan Infrastruktur SDA.</p>
                </div>
                <div  class="tab-pane fade" id="manfaat" role="tabpanel">
                  <p>Mempermudah Masyarakat Mendapatkatkan Informasi Pembangunan Infrastruktur SDA di Provinsi Papua Barat. Memutus birokrasi yang berbelit-belit dalam menyampaikan usulan program/aduan serta menghindarkan Konflik Kepentingan. Mempermudah Penyelenggara Infrastruktur dalam Menyusun Program Kerja. </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-8 col-lg-8 col-xs-12">
            <div class="Material-tab mb-3">
                <div class="tab-content">
                    <!-- <img width="100%" src="<?// echo base_url();?>assets/frontend/assets/images/kinerja_pelayanan.png"> -->

                  <div id="sliderContol" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url();?>assets/frontend/assets/images/kinerja_pelayanan.png" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url();?>assets/frontend/assets/images/daerah_irigasi.png" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url();?>assets/frontend/assets/images/daerah_irigasi1.png" alt="Third slide">
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
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Welcome Section End -->