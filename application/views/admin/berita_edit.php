<link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
<style>
    textarea#isiberita {
        width: 100%;
        padding: 10px;
    }
</style>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Berita</h1>
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
                            <div id="gambar_berita" class="dropzone gambar_berita border-1" requireda>
                                <div class="dz-message">Klik atau drop foto KTP ke sini</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label for="isiberita">Ubah Isi Berita</label>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- disini bisa disi dngan value nanti klo dipake di form edit -->
                        <textarea class="tinymce-editor" id="isiberita" name="isiberita"><?php echo $berita->isi; ?></textarea>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="idberita" id="idberita" value="">
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4 d-flex justify-content-end">
                        <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary">Simpan</button>
                    </div>

                </div>


                </form>

            </div>
        </div>
    </section>
</main>

<!-- JS Upload Berita Baru Halaman Admin Panel -->
<script>
    Dropzone.autoDiscover = false;
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
            var isiberita = $("textarea[name='isiberita']").val();
            var judulberita = $("input[name='judulberita']").val();
            var slugberita = $("input[name='slugberita']").val();
            var kategoriberita = $("select[name='kategoriberita']").val();
            var idberita = $("input[name='idberita']").val();


            $.ajax({
                url: "<?php echo site_url('admin/berita/saveberita') ?>",
                type: "POST",
                data: {
                    judulberita: judulberita,
                    isiberita: isiberita,
                    slugberita: slugberita,
                    kategoriberita: kategoriberita,
                    idberita: idberita,
                },

                error: function() {
                    console.log('Tidak berhasil simpan data');
                },
                success: function(data) {
                    var objData = jQuery.parseJSON(data);

                    if (objData.status) {
                        console.log('Simpan berhasil');
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
            maxFilesize: 50,
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
            c.append("kodelaporan", $('#gambar_berita').val());
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