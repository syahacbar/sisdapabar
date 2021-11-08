<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

<!-- CSS Bootstrap 3 -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' />
<style>
    div#tabelLaporan_filter,
    input.dataTable-input,
    .dataTable-top .dataTable-dropdown,
    .dataTable-top .dataTable-search {
        display: none;
    }

    .panel-heading {
        padding: 0;
        margin: 0 !important;
    }

    div#identity {
        padding: 0;
    }

    div#identity .card-body {
        padding: 0;
    }

    #foto-ktp .card-body {
        padding: 0;
    }

    #foto-ktp {
        padding: 0;
    }

    div#report .card-body {
        padding: 0;
    }

    div#report .card-body td {
        padding: 5px 0px;
    }

    .table.table-borderless {
        border: 0 !important;
    }

    #detailLaporan h3 {
        font-size: 24px;
        color: #17919e;
        text-shadow: 1px 1px #ccc;
        text-align: left;
    }

    .modal-header {
        justify-content: start !important;
    }
</style>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Pengaduan</h1>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                <label>Filter By Infrastruktur</label>
                                <div class="panel-heading mt-2">
                                    <select id="pilihinfrastruktur" name="pilihinfrastruktur" aria-controls="pilihinfrastruktur" class="custom-select custom-select-sm form-control form-control-sm form-select">
                                        <option value="0">- Pilih Semua Infrastruktur - </option>
                                        <option value="Jalan">Jalan</option>
                                        <option value="Drainase">Drainase</option>
                                        <option value="Jembatan">Jembatan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                <label>Filter By Kab/Kota</label>
                                <div class="panel-heading mt-2">
                                    <select id="pilihlokasi_kabkota" name="pilihlokasi_kabkota" aria-controls="pilihlokasi_kabkota" class="custom-select custom-select-sm form-control form-control-sm form-select">
                                        <option value="0"><i class="bi bi-chevron-down"></i>- Pilih Semua Kab./Kota - </option>
                                        <?php
                                        foreach ($kabupaten as $kab) {
                                            echo '<option value="' . $kab->kode . '">' . $kab->nama . '</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                <label>Filter By Status</label>
                                <div class="panel-heading mt-2">
                                    <select id="pilihstatus" name="pilihstatus" aria-controls="pilihstatus" class="custom-select custom-select-sm form-control form-control-sm form-select">
                                        <option value="0"><i class="bi bi-chevron-down"></i>- Pilih Semua Status - </option>
                                        <option value="Diterima">Diterima</option>
                                        <option value="Ditolak">Ditolak</option>
                                        <option value="Menunggu">Menunggu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                <label>Cari Laporan</label>
                                <div class="panel-heading mt-2">
                                    <input class="form-control border-1 border-success" type="text" id="kolomcari" placeholder="Ketik kata kunci di sini">
                                </div>
                            </div>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable" id="tabelLaporan">
                            <thead>
                                <tr>
                                    <th>Aksi</th>
                                    <th>Status</th>
                                    <th>Tanggal Laporan</th>
                                    <th>Kode Laporan</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>Isi Laporan</th>
                                    <th>Infrastruktur</th>
                                    <th>Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pengaduan as $p) :  ?>
                                    <tr>
                                        <td>
                                            <button class="btn btn-info btn-sm mb-1" href="" title="Detail" data-toggle="modal" data-target="#detailLaporan<?php echo $p->kodelaporan ?>"><i class="bi bi-eye"></i></button>

                                            <?php if ($p->status == 'Diterima') { ?>
                                                <a class="btn btn-danger btn-sm btnTolak" href="" data-idlaporan="<?php echo $p->id; ?>"><i class="bi bi-x-square"></i></a>
                                            <?php } elseif ($p->status == 'Ditolak') { ?>
                                                <a class="btn btn-success btn-sm btnTerima" href="" data-idlaporan="<?php echo $p->id; ?>"><i class="bi bi-check-square"></i></a>
                                            <?php } else { ?>
                                                <a class="btn btn-success btn-sm btnTerima mb-1" href="" title="Terima" data-idlaporan="<?php echo $p->id; ?>"><i class="bi bi-check-square"></i></a>
                                                <a class="btn btn-danger btn-sm btnTolak mb-1" href="" title="Tolak" data-idlaporan="<?php echo $p->id; ?>"><i class="bi bi-x-square"></i></a>
                                            <?php } ?>
                                        </td>
                                        <td><?php echo $p->status; ?></td>
                                        <td><?php echo $p->tgl_laporan; ?></td>
                                        <td><?php echo $p->kodelaporan; ?></td>
                                        <?php
                                        $CI = &get_instance();
                                        $CI->load->model('M_wilayah');
                                        $kab = $CI->M_wilayah->get_by_id($p->lokasi_kabkota);
                                        $kec = $CI->M_wilayah->get_by_id($p->lokasi_distrik);
                                        ?>
                                        <td><?php echo ucwords(strtolower($kab->nama));
                                            ?></td>
                                        <td><?php echo $p->isi_laporan; ?></td>
                                        <td><?php echo $p->infrastruktur; ?></td>
                                        <td><?php echo $p->nama_ruasjalan; ?></td>
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
<div class="modal fade" id="detailLaporan<?php echo $p->kodelaporan ?>" tabindex="-1" role="dialog" aria-labelledby="detailLaporanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="detailLaporanLabel"><i class="bi bi-file-earmark-fill"></i>Detail Laporan <?php echo $p->kodelaporan; ?></h3>
            </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#uploadTab" aria-controls="uploadTab" role="tab" data-toggle="tab">Data Pelapor</a>

                        </li>
                        <li role="presentation">
                            <a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab">Detail Laporan</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content mt-3">
                        <div role="tabpanel" class="tab-pane active" id="uploadTab">
                            <div id="identity" class="col-sm-7 m-0">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td width="30%">NIK</td>
                                                    <td>:</td>
                                                    <td><span id="nikModal"></span><?php echo $p->nik; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Nama Lengkap</td>
                                                    <td>:</td>
                                                    <td><span id="namaModal"></span><?php echo $p->nama_pelapor; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Alamat Lengkap</td>
                                                    <td>:</td>
                                                    <td><span id="alamatModal"></span><?php echo $p->alamat_pelapor; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Email</td>
                                                    <td>:</td>
                                                    <td><span id="emailModal"></span><?php echo $p->email; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Nomor HP</td>
                                                    <td>:</td>
                                                    <td><span id="nohpModal"></span><?php echo $p->no_hp; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="foto-ktp" class="col-sm-5 m-0">
                                <div class="card">
                                    <div class="card-body">
                                        <img width="100%" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/02/04/4132631623.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="browseTab">
                            <div id="report" class="col-sm-7">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td width="30%">Tanggal Laporan</td>
                                                    <td>:</td>
                                                    <td><span id="infra"></span><?php echo $p->tgl_laporan; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Jenis Infrastruktur</td>
                                                    <td>:</td>
                                                    <td><span id="infra"></span><?php echo $p->infrastruktur; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Koordinat Lokasi</td>
                                                    <td>:</td>
                                                    <td>
                                                        <a href="<?php echo $p->latitude; ?>"><span id="latitude">Latitude: <?php echo $p->latitude; ?></span></a><br>
                                                        <span id="koordinat">Longitude: <?php echo $p->longitude; ?></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Nama Ruas Jalan</td>
                                                    <td>:</td>
                                                    <td><span id="ruasjalan"></span><?php echo $p->nama_ruasjalan; ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Kec/Distrik</td>
                                                    <td>:</td>
                                                    <td><span id="lokasidistrik"></span><?php echo ucwords(strtolower($kab->nama)); ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Kab/Kota</td>
                                                    <td>:</td>
                                                    <td><span id="lokasikabkota"></span><?php echo $kec->nama; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="gbrDok" class="col-sm-5">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- <div class="row">
                                            <div class="col-sm-4">
                                                <img id="dok1" src="" alt="jalan1">
                                            </div>
                                            <div class="col-sm-4">
                                                <img id="dok2" src="" alt="jalan2">
                                            </div>
                                            <div class="col-sm-4">
                                                <img id="dok3" src="" alt="jalan3">
                                            </div>
                                        </div> -->

                                        <div id="dokIndikator" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#dokIndikator" data-slide-to="0" class="active"></li>
                                                <li data-target="#dokIndikator" data-slide-to="1"></li>
                                                <li data-target="#dokIndikator" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <?php
                                                $CI = &get_instance();
                                                $CI->load->model('M_pengaduan');
                                                $gb = $CI->M_pengaduan->get_allimage($p->kodelaporan, 'dokumentasi1');
                                                ?>
                                                <div class="carousel-item active">
                                                    <?php if ($gb) { ?>
                                                        <img width="100" height="150" src="<?php echo base_url('upload/dokumentasi/') . $gb->nama_file; ?>" alt="">
                                                    <?php } else { ?>
                                                        <img width="100" height="150" src="<?php echo base_url('upload/dokumentasi/noimageavail.jpg'); ?>" alt="">
                                                    <?php } ?>

                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <h5>Isi Laporan:</h5>
                                <p id="pengaduan"><?php echo $p->isi_laporan; ?>
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type='text/javascript'>
    $(document).ready(function() {
        // Custom search bar
        cari_lp = $('#tabelLaporan').DataTable();
        $('#kolomcari').keyup(function() {
            cari_lp.search($(this).val()).draw();
        })

        //action button terima laporan/pengaduan
        $('.btnTerima').click(function() {
            //deklarasi variabel untuk mengangkap id laporand dari anchor/button terima dgn atribut data-idlaporan
            var idlaporan = $(this).attr('data-idlaporan');
            // ajax untuk proses ubah status
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>admin/pengaduan/terimalaporan",
                data: {
                    idlaporan: idlaporan
                },
                success: function(data) {
                    var objData = jQuery.parseJSON(data);
                    console.log(objData.status);
                }
            });
        });

        //action button tolak laporan/pengaduan
        $('.btnTolak').click(function() {
            //deklarasi variabel untuk mengangkap id laporand dari anchor/button terima dgn atribut data-idlaporan
            var idlaporan = $(this).attr('data-idlaporan');
            // ajax untuk proses ubah status
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>admin/pengaduan/tolaklaporan",
                data: {
                    idlaporan: idlaporan
                },
                success: function(data) {
                    var objData = jQuery.parseJSON(data);
                    console.log(objData.status);
                }
            });
        });
    });
</script>

<script>
    function addImage(pk) {
        alert("addImage: " + pk);
    }

    $('#myModal .save').click(function(e) {
        e.preventDefault();
        addImage(5);
        $('#myModal').modal('hide');
        //$(this).tab('show')
        return false;
    })
</script>