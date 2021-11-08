<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

<link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

<style>
    /*    div#newsTable_filter, 
    input.dataTable-input,
    .dataTable-top .dataTable-dropdown,
    .dataTable-top .dataTable-search {
        display: none;
    }*/

    .panel-heading {
        padding: 0;
        margin: 0 !important;
    }


    /* Toggle CSS */

    .toggle-btn {
        width: 40px;
        height: 21px;
        background: grey;
        border-radius: 50px;
        padding: 3px;
        cursor: pointer;
        -webkit-transition: all 0.3s 0.1s ease-in-out;
        -moz-transition: all 0.3s 0.1s ease-in-out;
        -o-transition: all 0.3s 0.1s ease-in-out;
        transition: all 0.3s 0.1s ease-in-out
    }

    .toggle-btn>.inner-circle {
        width: 15px;
        height: 15px;
        background: #fff;
        border-radius: 50%;
        -webkit-transition: all 0.3s 0.1s ease-in-out;
        -moz-transition: all 0.3s 0.1s ease-in-out;
        -o-transition: all 0.3s 0.1s ease-in-out;
        transition: all 0.3s 0.1s ease-in-out
    }

    .toggle-btn.active {
        background: blue !important
    }

    .toggle-btn.active>.inner-circle {
        margin-left: 19px
    }
</style>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Berita</h1>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-3">
                                <a href="<?php echo site_url('admin/berita/add'); ?>" class="btn btn-info text-white">Tambah Berita</a>
                            </div>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable" id="newsTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Slider</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($berita as $news) :
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $news->tanggal; ?></td>
                                        <td><?php echo $news->judul; ?></td>
                                        <td><?php echo $news->kategori; ?></td>
                                        <?php
                                        $CI = &get_instance();
                                        $CI->load->model('M_berita');
                                        $sl = $CI->M_berita->get_slider_by_idberita($news->id)->row();
                                        ?>
                                        <td class="text-center">
                                            <?php if ($CI->M_berita->get_slider_by_idberita($news->id)->num_rows() > 0) { ?>
                                                <div data-sliderstatus="<?php echo $sl->slider; ?>" data-idberita="<?php echo $sl->idberita; ?>" class="toggle-btn <?php echo ($sl->slider == '1') ? 'active' : ''; ?>">
                                                    <div class="inner-circle"></div>
                                                </div>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo site_url('admin/berita/edit/') . $news->id; ?>" class="btn btn-info btn-icon-split btn-sm editform">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                            <a href="" class="btn btn-danger btn-icon-split btn-sm deletedata" data-idberita="<?php echo $news->id; ?>">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                <span class="text">Hapus</span>
                                            </a>
                                        </td>

                                        <!-- <button class="btn btn-primary btn-sm btnEdit" data-userid=""><i class="bi bi-pencil-square"></i> Edit</button> -->
                                        <!-- <button class="btn btn-danger btn-sm btnDelete" data-userid=""><i class="bi bi-trash"></i> Hapus</button> -->
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<!-- End #main -->

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="addNewNews" tabindex="-1" role="dialog" aria-labelledby="addNewNewsLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewNewsLabel">Tambah Berita</h5>
            </div>
            <?php echo $this->session->flashdata('notif'); ?>
            <?php echo form_open_multipart('berita/saveberita', array('id' => 'formInputberita')); ?>
            <!-- <form id="formInputberita" method="POST" enctype="multipart/form-data"></form> -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="judulberita" name="judulberita" placeholder="Judul Berita" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <select id="kategoriberita" name="kategoriberita" aria-controls="kategoriberita" class="custom-select form-control form-select">
                                <option value="0">- Pilih Kategori Berita - </option>
                                <option value="Irigasi">Irigasi</option>
                                <option value="Sungai">Sungai</option>
                                <option value="Pantai">Pantai</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <textarea type="text" class="form-control" rows="3" id="isiberita" name="isiberita" placeholder="Ketik isi berita di sini" required></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="slugberita" name="slugberita" placeholder="Slug Berita" required>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group mt-0">
                            <div id="gambar_berita" class="dropzone gambar_berita" requireda>
                                <div class="dz-message">Klik atau drop foto KTP ke sini</div>
                            </div>
                        </div>
                    </div>

                </div>

                <input type="hidden" id="id" name="id">

            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

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

            $.ajax({
                url: "<?php echo site_url('admin/berita/saveberita') ?>",
                type: "POST",
                data: {
                    judulberita: judulberita,
                    isiberita: isiberita,
                    slugberita: slugberita,
                    kategoriberita: kategoriberita,
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