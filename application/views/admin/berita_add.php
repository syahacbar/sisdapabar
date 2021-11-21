<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Berita</title>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

    <!-- Textarea editor Summernote CSS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- === Tambahan CSS Halaman Admin Edit Berita === -->
    <link href="<?php echo base_url('assets/backend/assets/css/csstambahan/tambah-berita.css'); ?>" rel="stylesheet">

</head>
<body>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Berita</h1>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo form_open_multipart('admin/berita/saveberita', array('id' => 'formInputberita')); ?>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2">
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="judulberita" name="judulberita" placeholder="Judul Berita" required>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <select id="kategoriberita" name="kategoriberita" aria-controls="kategoriberita" class="custom-select form-control form-select">
                                        <option value="0">- Pilih Kategori Berita - </option>
                                        <option value="Irigasi">Irigasi</option>
                                        <option value="Sungai">Sungai</option>
                                        <option value="Pantai">Pantai</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <label for="" class="">Tampilkan gambar berita sebagai slider di halaman beranda?</label>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="slider" id="tampil_slider" checked>
                                        <label class="form-check-label" for="tampil_slider">
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="slider" id="no_slider">
                                        <label class="form-check-label" for="no_slider">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2">
                        <div class="form-group mt-0">
                            <button type="button" class="btn btn-primary btn-sm d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#gambarBerita">
                            <i class="bi bi-info-square-fill"></i>
                            </button>
                            <div id="gambar_berita" class="dropzone gambar_berita border-1" requireda>
                                <div class="dz-message">Klik atau drop gambar berita ke sini</div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label for="" class="">Isi Berita</label>
                        <!-- disini bisa disi dngan value nanti klo dipake di form edit -->
                        <textarea id="summernote" name="isiberita"></textarea>
                    </div>

                    <!-- diparsing di bagian script -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="idberita" id="idberita" value="<?php echo date('YmdHi'); ?>">
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4 d-flex justify-content-end">
                        <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?php echo base_url('admin/berita');?>" class="btn btn-secondary btn-sm float-right"><span class="fa fa-history"></span>Cancel</a>
                    </div>

                </div>


                </form>

                <div id="loader"></div>

            </div>
        </div>
    </section>
</main>

<!-- Modal Bantuan 3 -->
<div class="modal fade" id="gambarBerita" tabindex="-1" role="dialog" aria-labelledby="modalDocLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDocLabel">Petunjuk!</h5>
        <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning alert-dismissible fade show peringatan mb-3" role="alert">
          Foto/gambar yang diunggah akan dijadikan thumbnail berita. Silakan unggah foto/gambar berformat .jpg, .png, dan .jpeg. Ukuran maksimal gambar 2MB dan jumlah gambar hanya 1 buah.
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- Akhir Modal Bantuan -->

<script>
    Dropzone.autoDiscover = false;
    var spinner = $('#loader');
    $(document).ready(function() {

        //untuk slide ON/OFF
        $('.toggle-btn').click(function() {
            $(this).toggleClass('active').siblings().removeClass('active');

            var idberita = $(this).attr('data-idberita');
            var sliderstatus = $(this).attr('data-sliderstatus');

            if (sliderstatus == '0') {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/berita/switchslider/1",
                    data: {
                        idberita: idberita,
                        sliderstatus: sliderstatus
                    },
                    success: function(data) {
                        var objData = jQuery.parseJSON(data);
                        console.log(objData.status);
                    }
                });
            } else if (sliderstatus == '1') {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/berita/switchslider/0",
                    data: {
                        idberita: idberita,
                        sliderstatus: sliderstatus
                    },
                    success: function(data) {
                        var objData = jQuery.parseJSON(data);
                        console.log(objData.status);
                    }
                });
            }
        });

        $('#formInputberita').submit(function(e) {
            e.preventDefault();
            spinner.show();

            var isiberita = $("textarea[name='isiberita']").val();
            var judulberita = $("input[name='judulberita']").val();
            var slugberita = $("input[name='slugberita']").val();
            var kategoriberita = $("select[name='kategoriberita']").val();
            var slider = $("input[name='slider']").val();
            var idberita = $("input[name='idberita']").val();

            $.ajax({
                url: "<?php echo site_url('admin/berita/saveberita') ?>",
                type: "POST",
                data: {
                    judulberita: judulberita,
                    isiberita: isiberita,
                    slugberita: slugberita,
                    kategoriberita: kategoriberita,
                    slider: slider,
                    idberita: idberita
                },

                error: function() {
                    console.log('Tidak berhasil simpan data');
                },
                success: function(data) {
                    var objData = jQuery.parseJSON(data);

                    if (objData.status) {
                        // console.log('Simpan berhasil');
                        // location.reload();
                          alert("Berita Berhasil Dikirim");
                          spinner.hide();
                           location.reload();
                          //window.location.href = "<?php echo base_url('admin/berita') ?>";
                    } else {
                        console.log('Gagal simpan');
                    }
                }
            });

        });

        var unggah_gbrberita = new Dropzone(".gambar_berita", {
            autoProcessQueue: true,
            url: "<?php echo site_url('admin/berita/uploadgbrberita') ?>",
            maxFilesize: 2,
            maxFiles: 1,
            method: "post",
            acceptedFiles: "image/*",
            paramName: "gambar_berita",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
        });

        unggah_gbrberita.on("sending", function(a, b, c) {
            a.token = Math.random();
            c.append("token_foto", a.token); //Menmpersiapkan token untuk masing masing foto
            c.append("idberita", $('#idberita').val()); //ambil dari idberita yang tipe hidden di atas, sebelum button Simpan
            c.append("slider", $('slider').val()); //ambil dari idberita yang tipe hidden di atas, sebelum button Simpan


        });


        $(document).on('click', '.deletedata', function() {
            var idberita = $(this).data("idberita");
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    url: "<?php echo site_url(); ?>admin/berita/deleteberita",
                    type: "POST",
                    data: {
                        idberita: idberita
                    },
                    success: function(data) {
                        var objData = jQuery.parseJSON(data);
                        console.log(objData.status);
                        console.log(objData.info);
                        //location.reload();
                    }
                });
            } else {
                return false;
            }
        });

    });
</script>

<script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
</script>


  </body>
</html>