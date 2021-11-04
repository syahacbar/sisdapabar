<style>
  #contactForm .form-control {
    font-weight: 500;
    height: auto;
    margin: 0;
  }

  #contactForm .form-group label.control-label,
  .form-group.label-floating select {
    font-size: 16px;
    color: #000;
  }

  .form-group select {
    width: 100%;
  }

  section#laporanpengaduan {
    width: 60%;
    margin: 7rem 20% 5rem 20%;
    box-shadow: 0 10px 30px 0 rgb(0 0 0 / 20%);
    padding-top: 0;
  }

  section#laporanpengaduan .container {
    background: #fff !important;
  }


  .row.judulsection .col-md-12 h1 {
    color: #fff;
    margin: 0;
    padding: 25px 0;
  }

  .row.judulsection .col-md-12 {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #5166d8;
  }

  .row.jenisinfra.mb-3 .row {
    padding: 20px !important;
  }

  #buktiLaporan .form-group {
    margin-top: 0 !important;
  }

  #buktiLaporan button i {
    font-size: 28px;
    padding-bottom: 0 !important;
  }

  #buktiLaporan button {
    margin: 0 auto;
    padding: 0 !important;
    margin-bottom: -20px;
    background-color: #fff;
  }

  .kirimLaporan {
    background-color: #5166d8 !important;
    width: 100% !important;
    height: 45px !important;
  }

  label.hitam{
    color: black;
  }
</style>
<?php echo $map['js']; ?>

<link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

<!-- Contact Us Section -->
<section id="laporanpengaduan" class="Material-contact-section section-padding section-dark">
  <div class="container">
    <div class="row judulsection">
      <!-- Section Titile -->
      <div class="col-md-12">
        <h1 class="text-center">FORMULIR LAPORAN PENGADUAN INFRASTRUKTUR SDA</h1>
      </div>
    </div>

    <div class="row mb-3 header-formlap mt-3">
      <div class="left-text col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
        <h4>IDENTITAS PELAPOR</h4>
      </div>
    </div>
    <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
    <div class="row">
      <div class="col-lg-6">
        <div id="buktiLaporan" class="row">
          <div class="col-md-12">
            <div class="form-group mt-0">
              <label class="hitam">Kartu Identitas Pelapor</label>
              <div class="alert alert-warning alert-dismissible fade show peringatan" role="alert">
                <strong>Petunjuk!</strong> Silahkan unggah foto identitas seperti KTP/SIM/Paspor anda, file dapat berupa file .jpg, .jpeg, .doc, .docx, .pdf
              </div><br>
            </div>
          </div>
          <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group mt-0">
              <!-- <label>Foto 2</label> -->
              <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalBantuan1">
                <i class="bi bi-info-square-fill"></i>
              </button>
              <div id="dokumentasi" class="dropzone dokumentasi ktp" requireda>
                <div class="dz-message">Klik atau drop foto KTP ke sini</div>
              </div>
            </div>
          </div>
        </div>
      </div>   
      <div class="col-lg-6">
        <div class="col-md-12 wow animated fadeInRight" data-wow-delay=".2s">
          <!-- Name -->
          <div class="form-group label-floating">
            <label class="control-label" for="nik">NIK</label>
            <input class="form-control" id="nik" type="text" name="nik" required data-error="Silakan ketik NIK Anda">
            <div class="help-block with-errors"></div>
          </div>
        </div>

        <div class="col-md-12 wow animated fadeInRight">
          <div class="form-group label-floating">
            <label class="control-label" for="nama_pelapor">Nama Lengkap</label>
            <input class="form-control" id="nama_pelapor" type="text" name="nama_pelapor" required data-error="Silakan isi nama Anda">
            <div class="help-block with-errors"></div>
          </div>
        </div>

        <div class="col-md-12 wow animated fadeInRight">
          <div class="form-group label-floating">
            <label class="control-label" for="no_hp">Nomor WhatsApp</label>
            <input class="form-control" id="no_hp" type="text" name="no_hp" required data-error="Silakan isi nomor WA Anda">
            <div class="help-block with-errors"></div>
          </div>
        </div>

        <div class="col-md-12 wow animated fadeInRight">
          <div class="form-group label-floating">
            <label class="control-label" for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email" required data-error="Silakan isi Email Anda">
            <div class="help-block with-errors"></div>
          </div>
        </div>


      </div>     
    </div>

    <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label" for="alamat_pelapor">Alamat Tinggal</label>
                <textarea class="form-control" rows="6" id="alamat_pelapor" type="text" name="alamat_pelapor" required data-error="Format nama jalan: Nama jalan, No. Rumah, RT/RW, dan nama kompleks."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group label-floating">
                    <!-- <label class="control-label" for="name">Kabupaten/Kota</label> -->
                    <select class="custom-select" name="kab_pelapor" id="kab_pelapor" requireda>
                      <div class="help-block with-errors"></div>
                      <option value=""><i class="fas fa-chevron-down"></i>- Pilih Kabupaten/Kota -</option>
                      <?php
                      foreach ($wil_kab as $kab) {
                        echo '<option value="' . $kab->kode . '">' . $kab->nama . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group label-floating">
                    <!-- <label class="control-label" for="name">Kecamatan/Distrik</label> -->
                    <select class="custom-select" name="kec_pelapor" id="kec_pelapor" requireda>
                      <option value="">Pilih Kecamatan/Distrik</option>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group label-floating">
                    <!-- <label class="control-label" for="email">Desa/Kelurahan</label> -->
                    <select class="custom-select" name="des_pelapor" id="des_pelapor" requireda>
                      <option value="">Pilih Kelurahan/Desa</option>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="text-left col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
              <h4 class="mb-2">DETAIL LAPORAN PENGADUAN</h4>
            </div>

            <div class="col-md-12">
              <div class="form-group mt-0">
                <!-- <label>Lokasi</label> -->
                <div class="alert alert-warning alert-dismissible fade show peringatan" role="alert">
                  <strong>Petunjuk!</strong> Geser pin maps di bawah ini untuk mengambil koordinat lokasi secara otomatis.
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mt-0">
                <?php echo $map['html']; ?>
              </div>
            </div>
            <div class="col-md-6 wow animated fadeInRight">
              <div class="form-group label-floating">
                <label for="latitude" class="control-label">Latitude</label>
                <input class="form-control" id="latitude" type="text" name="latitude" required data-error="Silakan isi Latitude lokasi Anda">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-6 wow animated fadeInRight">
              <div class="form-group label-floating">
                <label for="longitude" class="control-label">Longitude</label>
                <input class="form-control" id="longitude" name="longitude" required data-error="Silakan isi longitude lokasi Anda"></input>
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>

          <div class="row jenisinfra mb-3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group mb-0">
                <label class="hitam">Jenis Infrastruktur</label>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-lg-4">
                  <input type="checkbox" id="infrastruktur" name="infrastruktur" value="Irigasi">
                  <label for="Irigasi" class="hitam"> Irigasi</label>
                </div>
                <div class="col-lg-4">
                  <input type="checkbox" id="infrastruktur" name="infrastruktur" value="Sungai">
                  <label for="Sungai" class="hitam"> Sungai</label>
                </div>
                <div class="col-lg-4">
                  <input type="checkbox" id="infrastruktur" name="infrastruktur" value="Pantai">
                  <label for="Pantai" class="hitam"> Pantai</label>
                </div>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label for="nama_ruasjalan" class="hitam">Nama Ruas Jalan</label>
                <textarea class="form-control" rows="5" id="nama_ruasjalan" name="nama_ruasjalan" required data-error="Silakan isi nama_ruasjalan lokasi Anda"></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <select class="custom-select" name="lokasi_kabkota" id="lokasi_kabkota" requireda>
                      <option value=""><i class="fas fa-chevron-down"></i>- Pilih Kabupaten/Kota -</option>
                      <?php
                      foreach ($wil_kab as $kab) {
                        echo '<option value="' . $kab->kode . '">' . $kab->nama . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>    

                <div class="col-12">
                  <div class="form-group">
                    <select class="custom-select" name="lokasi_distrik" id="lokasi_distrik" requireda>
                      <option value="">- Pilih Kecamatan/Distrik -</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12 wow animated fadeInRight">
              <div class="form-group label-floating">
                <label for="isi_laporan" class="hitam">Isi Laporan</label>
                <textarea class="form-control" rows="3" id="isi_laporan" name="isi_laporan" required data-error="Silakan ketik di sini laporan Anda"></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div><br>

          <div id="buktiLaporan" class="row">
            <div class="col-md-12">
              <div class="form-group mt-0">
                <label class="hitam">Bukti Laporan</label>
                <div class="alert alert-warning alert-dismissible fade show peringatan" role="alert">
                  <strong>Petunjuk!</strong> Silakan unggah bukti laporan Anda. Klik ikon tanda tanya untuk melihat bantuan.
                </div><br>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="form-group mt-0">
                <!-- <label>Foto 1</label> -->
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalBantuan">
                  <i class="bi bi-info-square-fill"></i>
                </button>
                <div id="dokumentasi" class="dropzone dokumentasi dokumentasi1" requireda>
                  <div class="dz-message">Klik atau drop foto ke sini</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="form-group mt-0">
                <!-- <label>Foto 2</label> -->
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalBantuan1">
                  <i class="bi bi-info-square-fill"></i>
                </button>
                <div id="dokumentasi" class="dropzone dokumentasi dokumentasi2" requireda>
                  <div class="dz-message">Klik atau drop foto ke sini</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="form-group">
                <!-- <label>Foto 3</label> -->
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalBantuan2">
                  <i class="bi bi-info-square-fill"></i>
                </button>
                <div id="dokumentasi" class="dropzone dokumentasi dokumentasi3" requireda>
                  <div class="dz-message">Klik atau drop foto ke sini</div>
                </div>
              </div>
            </div>
          </div>
          <div id="buktiLaporan" class="row">
            <div class="col-md-12">
              <div class="form-group mt-0">
                <label class="hitam">Lampirkan Dokumen (Jika ada)</label>
                <div class="alert alert-warning alert-dismissible fade show peringatan" role="alert">
                  <strong>Petunjuk!</strong> Silakan lampirkan dokumen pendukung, file dapat berupa file .doc, .docx, .pdf
                </div><br>
              </div>
            </div>
            <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
              <div class="form-group mt-0">
                <!-- <label>Foto 2</label> -->
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalBantuan1">
                  <i class="bi bi-info-square-fill"></i>
                </button>
                <div id="dokumentasi" class="dropzone dokumentasi dokumen" requireda>
                  <div class="dz-message">Klik atau drop dokumen ke sini</div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="captchalaporan">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 p-0">
                <div class="form-group">
                  <center><?php echo $recaptcha; ?></center>
                </div>
              </div>                        
            </div>
          </div>

          <div class="row">
            <input type="hidden" name="kodelaporan" id="kodelaporan" value="<?php echo $kodelaporan; ?>">  
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <button type="submit" name="submit" id="btnSubmit" class="btn btn-common disabled kirimLaporan">Kirim Laporan</button>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</section>
<!-- Contact Us Section End -->

<script>
  function setMapToForm(latitude, longitude) {
    $('input[name="latitude"]').val(latitude);
    $('input[name="longitude"]').val(longitude);
  }

  Dropzone.autoDiscover = false;
    // var spinner = $('#loader');
    $(document).ready(function() {


      $("#lokasi_kabkota").change(function() {
        var url = "<?php echo site_url('lapor/add_ajax_kec'); ?>/" + $(this).val();
        $('#lokasi_distrik').load(url);
        return false;
      });
      $("#kab_pelapor").change(function() {
        var url = "<?php echo site_url('lapor/add_ajax_kec'); ?>/" + $(this).val();
        $('#kec_pelapor').load(url);
        return false;
      });
      $("#kec_pelapor").change(function() {
        var url = "<?php echo site_url('lapor/add_ajax_des'); ?>/" + $(this).val();
        $('#des_pelapor').load(url);
        return false;
      });


      var ktp_upload = new Dropzone(".ktp", {
          autoProcessQueue: true,
          url: "<?php echo site_url('lapor/uploadktp') ?>",
          maxFilesize: 50,
          maxFiles: 1,
          method: "post",
          acceptedFiles: "image/*",
          paramName: "filektp",
          dictInvalidFileType: "Type file ini tidak dizinkan",
          addRemoveLinks: true,
      });

      ktp_upload.on("sending", function(a, b, c) {
          a.token = Math.random();
          c.append("token_foto", a.token); //Menmpersiapkan token untuk masing masing foto
          c.append("kodelap", $('#kodelap').val());
      });

      var dokumentasi1_upload = new Dropzone(".dokumentasi1", {
        autoProcessQueue: true,
        url: "<?php echo site_url('lapor/uploaddokumentasi1') ?>",
        maxFilesize: 50,
        maxFiles: 1,
        method: "post",
        acceptedFiles: "image/*",
        paramName: "filedokumentasi1",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
      });

      dokumentasi1_upload.on("sending", function(a, b, c) {
        a.token = Math.random();
            c.append("token_dokumentasi", a.token); //Menmpersiapkan token untuk masing masing foto
            c.append("kodelap", $('#kodelap').val());
            c.append("kategori", "dokumentasi1");
          });
      var dokumentasi2_upload = new Dropzone(".dokumentasi2", {
        autoProcessQueue: true,
        url: "<?php echo site_url('lapor/uploaddokumentasi2') ?>",
        maxFilesize: 50,
        maxFiles: 1,
        method: "post",
        acceptedFiles: "image/*",
        paramName: "filedokumentasi2",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
      });

      dokumentasi2_upload.on("sending", function(a, b, c) {
        a.token = Math.random();
            c.append("token_dokumentasi", a.token); //Menmpersiapkan token untuk masing masing foto
            c.append("kodelap", $('#kodelap').val());
            c.append("kategori", "dokumentasi2");
          });
      var dokumentasi3_upload = new Dropzone(".dokumentasi3", {
        autoProcessQueue: true,
        url: "<?php echo site_url('lapor/uploaddokumentasi3') ?>",
        maxFilesize: 50,
        maxFiles: 1,
        method: "post",
        acceptedFiles: "image/*",
        paramName: "filedokumentasi3",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,
      });

      dokumentasi3_upload.on("sending", function(a, b, c) {
        a.token = Math.random();
            c.append("token_dokumentasi", a.token); //Menmpersiapkan token untuk masing masing foto
            c.append("kodelap", $('#kodelap').val());
            c.append("kategori", "dokumentasi3");
          });

        //untuk upload lampiran dokumen pendukung laporan pengaduan, berupa dokumen seperti pdf/word
        var dokumen_upload = new Dropzone(".dokumen", {
          autoProcessQueue: true,
          url: "<?php echo site_url('lapor/uploaddokumen') ?>",
          maxFilesize: 50,
          maxFiles: 1,
          method: "post",
          acceptedFiles: "image/*,application/pdf,.doc,.docx",
          paramName: "filedokumen",
          dictInvalidFileType: "Type file ini tidak dizinkan",
          addRemoveLinks: true,
        });

        dokumen_upload.on("sending", function(a, b, c) {
          a.token = Math.random();
            // c.append("token_dokumentasi", a.token); //Menmpersiapkan token untuk masing masing foto
            // c.append("kodelap", $('#kodelap').val());
            // c.append("kategori", "dokumentasi3");
          });

      });
    </script>