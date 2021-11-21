<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Berita</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>

    <!-- ==== Textarea editor Summernote === -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- === Tambahan CSS Halaman Admin Edit Berita === -->
    <link href="<?php echo base_url('assets/backend/assets/css/csstambahan/edit-berita.css'); ?>" rel="stylesheet">

  </head>
  <body>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Berita</h1>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo form_open_multipart('admin/berita/updateberita', array('id' => 'formInputberita')); ?>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2">
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="judulberita" name="judulberita" placeholder="Judul Berita" value="<?php echo $berita->judul; ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <select id="kategoriberita" name="kategoriberita" aria-controls="kategoriberita" class="custom-select form-control form-select">
                                        <option value="0">- Pilih Kategori Berita - </option>
                                        <option <?php echo ($berita->kategori == 'Irigasi') ? 'selected' : ''; ?> value="Irigasi">Irigasi</option>
                                        <option <?php echo ($berita->kategori == 'Sungai') ? 'selected' : ''; ?> value="Sungai">Sungai</option>
                                        <option <?php echo ($berita->kategori == 'Pantai') ? 'selected' : ''; ?> value="Pantai">Pantai</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2">
                        <div class="form-group mt-0">
                            <button type="button" class="btn btn-primary d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#gambarBerita">
                            <i class="bi bi-info-square-fill"></i>
                            </button>
                            <div id="gambar_berita" class="dropzone gambar_berita border-1" requireda>
                                <div class="dz-message">Klik atau drop gambar berita ke sini</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label for="isiberita">Ubah Isi Berita</label>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- di sini bisa diisi dengan value nanti klo dipake di form edit -->
                        <textarea id="isiberita" name="isiberita"><?php echo $berita->isi; ?></textarea>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="idberita" id="idberita" value="<?php echo $berita->id; ?>">
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4 d-flex justify-content-end">
                        <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary">Simpan</button>
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

            var isiberita = document.getElementById("isiberita").value
            var judulberita = $("input[name='judulberita']").val();
            var slugberita = $("input[name='slugberita']").val();
            var kategoriberita = $("select[name='kategoriberita']").val();
            var slider = $("input[name='slider']").val();
            var idberita = $("input[name='idberita']").val();

            console.log(isiberita);
            $.ajax({
                url: "<?php echo site_url('admin/berita/updateberita') ?>",
                type: "POST",
                data: {
                    judulberita: judulberita,
                    isiberita: isiberita,
                    slugberita: slugberita,
                    kategoriberita: kategoriberita,
                    slider: slider,
                    idberita: idberita,
                },

                error: function() {
                    console.log('Tidak berhasil simpan data');
                },
                success: function(data) {
                    var objData = jQuery.parseJSON(data);

                    if (objData.status) {
                          alert("Berita Berhasil Diubah");
                          spinner.hide();
                          location.reload();
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
            c.append("idberita", $('#idberita').val());
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
      $('#isiberita').summernote();
    });
</script>

  </body>
</html>