
<?php echo $map['js']; ?>

<link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
<!-- === Tambahan CSS Halaman Admin Edit Berita === -->
<link href="<?php echo base_url('assets/backend/assets/css/csstambahan/lapor.css'); ?>" rel="stylesheet">

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

    <form class="shake" role="form" id="formulirLaporan" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-6">
          <div id="buktiLaporan" class="row">
            <div class="col-md-12">
              <div class="form-group mt-0">
                <label class="hitam">Kartu Identitas Pelapor</label>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group mt-0">
                <!-- <label>Foto 2</label> -->
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalKTP">
                  <i class="bi bi-info-square-fill"></i>
                </button>
                <div id="ktp" class="dropzone ktp" requireda>
                  <div class="dz-message">Klik atau drop foto KTP ke sini</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-12 col-sm-12 col-xs-12 wow animated fadeInRight" data-wow-delay=".2s">
            <!-- Name -->
            <div class="form-group label-floating">
              <label class="hitam" for="nik">NIK</label>
              <input class="form-control" id="nik" type="text" name="nik" required data-error="Silakan ketik NIK Anda">
              <div class="help-block with-errors"></div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12 wow animated fadeInRight">
            <div class="form-group label-floating">
              <label class="hitam" for="nama_pelapor">Nama Lengkap</label>
              <input class="form-control" id="nama_pelapor" type="text" name="nama_pelapor" required data-error="Silakan isi nama Anda">
              <div class="help-block with-errors"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-sm-12 wow animated fadeInRight">
          <div class="form-group label-floating">
            <label class="hitam" for="no_hp">Nomor WhatsApp</label>
            <input class="form-control" id="no_hp" type="text" name="no_hp" required data-error="Silakan isi nomor WA Anda">
            <div class="help-block with-errors"></div>
          </div>
        </div>

        <div class="col-md-6 col-sm-12 wow animated fadeInRight">
          <div class="form-group label-floating">
            <label class="hitam" for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email" required data-error="Silakan isi Email Anda">
            <div class="help-block with-errors"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="hitam" for="alamat_pelapor">Alamat Tinggal</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group label-floating mt-0">
                <textarea class="form-controla w-100 px-2" rows="6" id="alamat_pelapor" type="text" name="alamat_pelapor" required placeholder="Format nama jalan: Nama jalan, No. Rumah, RT/RW, dan nama kompleks."></textarea>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group label-floating mt-0">
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
                  <div class="form-group label-floating mt-2">
                    <!-- <label class="control-label" for="name">Kecamatan/Distrik</label> -->
                    <select class="custom-select" name="kec_pelapor" id="kec_pelapor" requireda>
                      <option value="">Pilih Kecamatan/Distrik</option>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group label-floating mt-2">
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
                <div class="alert alert-warning alert-dismissible fade show peringatan mb-0" role="alert">
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
              <div class="form-group">
                <label for="latitude" class="hitam">Latitude</label>
                <input class="form-control" id="latitude" type="text" name="latitude" required data-error="Silakan isi Latitude lokasi Anda">
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-6 wow animated fadeInRight">
              <div class="form-group">
                <label for="longitude" class="hitam">Longitude</label>
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
                <div class="col-md-4">
                  <input type="radio" id="infrastruktur" name="infrastruktur" value="Irigasi">
                  <label for="Irigasi" class="hitam"> Irigasi</label>
                </div>
                <div class="col-md-4">
                  <input type="radio" id="infrastruktur" name="infrastruktur" value="Sungai">
                  <label for="Sungai" class="hitam"> Sungai</label>
                </div>
                <div class="col-md-4">
                  <input type="radio" id="infrastruktur" name="infrastruktur" value="Pantai">
                  <label for="Pantai" class="hitam"> Pantai</label>
                </div>

              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
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

            <div class="col-md-6">
              <div class="form-group">
                <select class="custom-select" name="lokasi_distrik" id="lokasi_distrik" requireda>
                  <option value="">- Pilih Kecamatan/Distrik -</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label for="nama_ruasjalan" class="hitam">Nama Ruas Jalan</label>
                <input class="form-control" rows="5" id="nama_ruasjalan" name="nama_ruasjalan" required data-error="Silakan isi nama_ruasjalan lokasi Anda"></input>
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label for="isi_laporan" class="hitam">Isi Laporan</label>
                <textarea class="form-control" rows="3" id="isi_laporan" name="isi_laporan"></textarea>
              </div>
            </div>
          </div>

          <div id="buktiLaporan" class="row">
            <div class="col-md-12">
              <div class="form-group mt-0">
                <label class="hitam">Bukti Laporan</label>
                <div class="alert alert-warning alert-dismissible fade show peringatan mb-0" role="alert">
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
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalSelfi">
                  <i class="bi bi-info-square-fill"></i>
                </button>
                <div id="dokumentasi" class="dropzone dokumentasi dokumentasi3" requireda>
                  <div class="dz-message">Klik atau drop foto ke sini</div>
                </div>
              </div>
            </div>
          </div>

          <div id="buktiLaporan" class="row mt-3">
            <div class="col-md-12">
              <div class="form-group mt-0">
                <label class="hitam">Lampirkan Dokumen (Jika ada)</label>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group mt-0">
                <!-- <label>Foto 2</label> -->
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalDoc">
                  <i class="bi bi-info-square-fill"></i>
                </button>
                <div id="dokumen_tambahan" class="dropzone dokumen_tambahan" requireda>
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
            <!-- Ini untuk ditangkap oleh ajax di bagian script -->
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
      </div>
    </form>
  </div>

  <div id="loader"></div>

  </div>
</section>
<!-- Contact Us Section End -->

<!-- Modal Bantuan 1 -->
<div class="modal fade" id="modalBantuan" tabindex="-1" role="dialog" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBantuanLabel">Info!</h5>
        <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        Untuk gambar pertama, fokus foto ke bagian jalan, drainase, atau jembatan yang rusak. Lihat gambar di bawah ini sebagai contoh.
        <div id="gambar1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/abrasi.jpg') ?>" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/sungai_rusak.jpg') ?>" alt="Second slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/irigasi_rusak.jpg') ?>" alt="Second slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#gambar1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#gambar1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Bantuan -->

<!-- Modal Bantuan 2 -->
<div class="modal fade" id="modalBantuan1" tabindex="-1" role="dialog" aria-labelledby="modalBantuan1Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBantuan1Label">Info!</h5>
        <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        Untuk gambar kedua, foto seluruh badan jalan atau drainase seperti gambar di bawah ini.
        <div id="gambar2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/sungai_rusak.jpg') ?>" alt="tampak samping jalan">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/abrasi.jpg') ?>" alt="tampak samping darainase">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/irigasi_rusak.jpg') ?>" alt="tampak samping darainase">
            </div>
          </div>
          <a class="carousel-control-prev" href="#gambar2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#gambar2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Bantuan -->

<!-- Modal Bantuan 3 -->
<div class="modal fade" id="modalSelfi" tabindex="-1" role="dialog" aria-labelledby="modalSelfiLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSelfiLabel">Info!</h5>
        <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        Silakan buat pose selfi dengan membelakangi jalan rusak.
        <div id="selfi" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/selfi_abrasi.jpg') ?>" alt="tampak samping jalan">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/selfi_irigasi_rusak.jpg') ?>" alt="tampak samping darainase">
            </div>
          </div>
          <a class="carousel-control-prev" href="#selfi" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#selfi" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Bantuan -->

<!-- Modal Bantuan 3 -->
<div class="modal fade" id="modalDoc" tabindex="-1" role="dialog" aria-labelledby="modalDocLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDocLabel">Info!</h5>
        <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning alert-dismissible fade show peringatan mb-3" role="alert">
          <strong>Petunjuk!</strong> Silakan lampirkan dokumen pendukung, file dapat berupa file .doc, .docx, .pdf
        </div>
        <div id="doc" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/pdf.png') ?>" alt="tampak samping jalan">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo base_url('assets/frontend/assets/images/doc.png') ?>" alt="tampak samping darainase">
            </div>
          </div>
          <a class="carousel-control-prev" href="#doc" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#doc" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Bantuan -->



<!-- Modal Panduan Unggah KTP -->
<div class="modal fade" id="modalKTP" tabindex="-1" role="dialog" aria-labelledby="modalKTPLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKTPLabel">Info!</h5>
        <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning alert-dismissible fade show peringatan mb-3" role="alert">
          <strong>Petunjuk!</strong> Silahkan unggah foto identitas seperti KTP/SIM/Paspor Anda. File dapat berupa file .jpg, .jpeg, .doc, .docx, dan/atau .pdf.
        </div>
        <img src="<?php echo base_url('assets/frontend/assets/images/ktp.jpg') ?>" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Bantuan -->


<script>
  function setMapToForm(latitude, longitude) {
    $('input[name="latitude"]').val(latitude);
    $('input[name="longitude"]').val(longitude);
  }

  Dropzone.autoDiscover = false;
  var spinner = $('#loader');
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


    var unggah_ktp = new Dropzone(".ktp", {
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

    unggah_ktp.on("sending", function(a, b, c) {
      a.token = Math.random();
      c.append("token_foto", a.token); //Menmpersiapkan token untuk masing masing foto
      c.append("kodelaporan", $('#kodelaporan').val()); //id diambil dari bagian input hidden di form di atas, sebelum btn kirim laporan
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
      c.append("kodelaporan", $('#kodelaporan').val()); //id diambil dari bagian input hidden di form di atas, sebelum btn kirim laporan
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
      c.append("kodelaporan", $('#kodelaporan').val()); //id diambil dari bagian input hidden di form di atas, sebelum btn kirim laporan
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
      c.append("kodelaporan", $('#kodelaporan').val()); //id diambil dari bagian input hidden di form di atas, sebelum btn kirim laporan
      c.append("kategori", "dokumentasi3");
    });

    //untuk upload lampiran dokumen pendukung laporan pengaduan, berupa dokumen seperti pdf/word
    var dokumen_upload = new Dropzone(".dokumen_tambahan", {
      autoProcessQueue: true,
      url: "<?php echo site_url('lapor/dokumen_tambahan') ?>",
      maxFilesize: 50,
      maxFiles: 1,
      method: "post",
      acceptedFiles: "image/*,application/pdf,.doc,.docx",
      paramName: "dokumen_tambahan",
      dictInvalidFileType: "Type file ini tidak dizinkan",
      addRemoveLinks: true,
    });

    dokumen_upload.on("sending", function(a, b, c) {
      a.token = Math.random();
      c.append("token_dokumentasi", a.token); //Menmpersiapkan token untuk masing masing foto
      c.append("kodelaporan", $('#kodelaporan').val()); //id diambil dari bagian input hidden di form di atas, sebelum btn kirim laporan
      c.append("kategori", "dokumen_tambahan");
    });

    $('#formulirLaporan').submit(function(e) {
      e.preventDefault();
      spinner.show();

      var kodelaporan = $("input[name='kodelaporan']").val();
      var nama_pelapor = $("input[name='nama_pelapor']").val();
      var nik = $("input[name='nik']").val();
      var alamat_pelapor = $("textarea[name='alamat_pelapor']").val();
      var kab_pelapor = $("select[name='kab_pelapor']").val();
      var kec_pelapor = $("select[name='kec_pelapor']").val();
      var des_pelapor = $("select[name='des_pelapor']").val();
      var no_hp = $("input[name='no_hp']").val();
      var email = $("input[name='email']").val();
      var isi_laporan = $("textarea[name='isi_laporan']").val();
      var infrastruktur = $("input[name='infrastruktur']").val();
      var nama_ruasjalan = $("input[name='nama_ruasjalan']").val();
      var lokasi_kabkota = $("select[name='lokasi_kabkota']").val();
      var lokasi_distrik = $("select[name='lokasi_distrik']").val();
      var latitude = $("input[name='latitude']").val();
      var longitude = $("input[name='longitude']").val();

      $.ajax({
        url: "<?php echo site_url('lapor/savelaporan') ?>",
        type: "POST",
        data: {
          kodelaporan: kodelaporan,
          nama_pelapor: nama_pelapor,
          nik: nik,
          alamat_pelapor: alamat_pelapor,
          kab_pelapor: kab_pelapor,
          kec_pelapor: kec_pelapor,
          des_pelapor: des_pelapor,
          no_hp: no_hp,
          email: email,
          isi_laporan: isi_laporan,
          infrastruktur: infrastruktur,
          nama_ruasjalan: nama_ruasjalan,
          lokasi_kabkota: lokasi_kabkota,
          lokasi_distrik: lokasi_distrik,
          latitude: latitude,
          longitude: longitude,
          // 'g-recaptcha-response': grecaptcha.getResponse()
        },
        error: function() {
          // console.log('Tidak berhasil simpan data');
          alert('Something is wrong');

        },
        // success: function(data) {
        //   var objData = jQuery.parseJSON(data);

        //   if (objData.status) {
        //     console.log('Simpan berhasil');
        //     spinner.hide();
        //     location.reload();
        //   } else {
        //     console.log('Gagal simpan');
        //   }
        success: function(data) {
          alert("Laporan Berhasil Terkirim");
          spinner.hide();
          location.reload();
        }
      });

    });

  });
</script>