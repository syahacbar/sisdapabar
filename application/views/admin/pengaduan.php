<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" /> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
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

    #detailLap h3 {
        font-size: 24px;
        color: #17919e;
        text-shadow: 1px 1px #ccc;
        text-align: left;
    }

    .modal-header {
        justify-content: start !important;
    }

    #IsiLaporan h4 {
        font-weight: bold;
    }

    div#foto-ktp img,
    div#dokIndikator img {
        width: 100%;
        height: 200px;
        object-fit: contain;
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        background-color: #17919e;
        padding: 10px !important;
        border-radius: 2px;
        width: 100px;
        height: 20px;
        background-size: 35%;
    }

    div#detailLap .card {
        box-shadow: none !important;
    }

    #DetailLaporan tr,
    #identitasPelapor tr {
        border: 0 !important;
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
                        <!-- <h5 class="card-title"></h5> -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                <label>Filter By Infrastruktur</label>
                                <div class="panel-heading mt-2">
                                    <select id="pilihinfrastruktur" name="pilihinfrastruktur" aria-controls="pilihinfrastruktur" class="custom-select custom-select-sm form-control form-control-sm form-select">
                                        <option value="">- Pilih Infrastruktur - </option>
                                        <option value="Irigasi">Irigasi</option>
                                        <option value="Sungai">Sungai</option>
                                        <option value="Pantai">Pantai</option>
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
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                <label>Filter By Status</label>
                                <div class="panel-heading mt-2">
                                    <select id="pilihstatus" name="pilihstatus" aria-controls="pilihstatus" class="custom-select custom-select-sm form-control form-control-sm form-select">
                                        <option value=""><i class="bi bi-chevron-down"></i>- Pilih Semua Status - </option>
                                        <option value="Diterima">Diterima</option>
                                        <option value="Ditolak">Ditolak</option>
                                        <option value="Menunggu">Menunggu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-3">
                                <label>Cari Laporan</label>
                                <div class="panel-heading mt-2">
                                    <input class="form-control border-1 border-secondary" type="text" id="kolomcari" placeholder="Ketik kata kunci di sini">
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
                                    <?php
                                    $CI = &get_instance();
                                    $CI->load->model('M_wilayah');
                                    $CI->load->model('M_pengaduan');
                                    //   $gb = $CI->M_pengaduan->get_allimage($p->kodelaporan);
                                    $kab = $CI->M_wilayah->get_by_id($p->lokasi_kabkota);
                                    $kec = $CI->M_wilayah->get_by_id($p->lokasi_distrik);
                                    $gb = $CI->M_pengaduan->get_allimage($p->kodelaporan, 'ktp');
                                    ?>
                                    <tr>
                                        <td width="130px">
                                            <a id="DetailLap" class="btn btn-info btn-sm mb-1" href="" title="Detail" data-toggle="modal" data-target="#detailLap" data-kodelaporan="<?php echo $p->kodelaporan; ?>" data-nik="<?php echo $p->nik; ?>" data-namapelapor="<?php echo $p->nama_pelapor; ?>" data-alamatpelapor="<?php echo $p->alamat_pelapor; ?>" data-email="<?php echo $p->email; ?>" data-nohp="<?php echo $p->no_hp; ?>" data-tgllaporan="<?php echo $p->tgl_laporan; ?>" data-infrastruktur="<?php echo $p->infrastruktur; ?>" data-koordinatlokasi="<?php echo $p->latitude, $p->longitude; ?>" data-namaruasjalan="<?php echo $p->nama_ruasjalan; ?>" data-namakabkota="<?php echo ucwords(strtolower($kab->nama)); ?>" data-namadistrik="<?php echo $kec->nama; ?>" data-isilaporan="<?php echo $p->isi_laporan; ?>" data-ktp="">
                                                <i class="bi bi-eye"></i>
                                            </a>
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
                                        <td width="150px"><?php echo $p->tgl_laporan; ?></td>
                                        <td><?php echo $p->kodelaporan; ?></td>
                                        <td><?php echo ucwords(strtolower($kab->nama));
                                            ?></td>
                                        <td><?php echo word_limiter($p->isi_laporan, 55); ?></td>
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


<div class="modal fade" id="detailLap" tabindex="-1" role="dialog" aria-labelledby="detailLapLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="detailLapLabel"><i class="bi bi-file-earmark-fill"></i>Detail Laporan
                    <span id="kodelaporan"></span>
                </h3>
            </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#uploadTab" aria-controls="uploadTab" role="tab" data-toggle="tab">Data Pelapor</a>

                        </li>
                        <li role="presentation">
                            <a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab">Detail Laporan</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <div role="tabpanel" class="tab-pane active" id="uploadTab">
                            <div id="identity" class="col-sm-7 m-0">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="identitasPelapor" class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th>NIK</th>
                                                    <td>: </td>
                                                    <td><span id="nik"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Pelapor</th>
                                                    <td>: </td>
                                                    <td><span id="nama_pelapor"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat Pelapor</th>
                                                    <td>: </td>
                                                    <td><span id="alamat_pelapor"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>: </td>
                                                    <td><span id="email"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>No. WhatsApp</th>
                                                    <td>: </td>
                                                    <td><span id="nohp"></span></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="foto-ktp" class="col-sm-5 m-0">
                                <div class="card">
                                    <div class="card-body">
                                        <img width="100" height="150" src="<?php echo base_url() ?>upload/ktp/konser_11.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="browseTab">
                            <div id="report" class="col-sm-7">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="DetailLaporan" class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th>Tanggal Laporan</th>
                                                    <td>: </td>
                                                    <td><span id="tgl_laporan"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Infrastruktur</th>
                                                    <td>: </td>
                                                    <td><span id="infrastruktur"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>Koordinat Lokasi</th>
                                                    <td>: </td>
                                                    <td><a href="<?php echo ('https://www.google.com/maps/place/') . $p->latitude, ',' . $p->longitude; ?>" target="_blank"><span id="koordinatlokasi"></span></a></td>
                                                </tr>
                                                <!-- <tr>
                                                    <th>Longitude</th>
                                                    <td><span id="longitude"></span></td>
                                                </tr> -->
                                                <tr>
                                                    <th>Nama Ruas Jalan</th>
                                                    <td>: </td>
                                                    <td><span id="nama_ruasjalan"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Kab./Kota</th>
                                                    <td>: </td>
                                                    <td><span id="nama_kabkota"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Kec./Distrik</th>
                                                    <td>: </td>
                                                    <td><span id="nama_distrik"></span></td>
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
                                            <div class="col-md-4">
                                                <?php // if ($gb) { 
                                                ?>
                                                    <img width="100" height="150" src="<?php // echo base_url('upload/dokumentasi/') . $gb->nama_file; 
                                                                                        ?>" alt="">
                                                <?php // } else { 
                                                ?>
                                                    <img width="100" height="150" src="<?php // echo base_url('upload/dokumentasi/noimageavail.jpg'); 
                                                                                        ?>" alt="">
                                                <?php // } 
                                                ?>
                                            </div>
                                        </div> -->
                                        <div id="dokIndikator" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#dokIndikator" data-slide-to="0" class="active"></li>
                                                <li data-target="#dokIndikator" data-slide-to="1"></li>
                                                <li data-target="#dokIndikator" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <?php if ($gb) { ?>
                                                        <img width="100" height="150" src="<?php echo base_url('upload/dokumentasi/') . $gb->nama_file; ?>" alt="">
                                                    <?php } else { ?>
                                                        <img width="100" height="150" src="<?php echo base_url('upload/dokumentasi/noimageavail.jpg'); ?>" alt="">
                                                    <?php } ?>
                                                </div>
                                                <div class="carousel-item">
                                                    <?php if ($gb) { ?>
                                                        <img width="100" height="150" src="<?php echo base_url('upload/dokumentasi/') . $gb->nama_file; ?>" alt="">
                                                    <?php } else { ?>
                                                        <img width="100" height="150" src="<?php echo base_url('upload/dokumentasi/noimageavail.jpg'); ?>" alt="">
                                                    <?php } ?>
                                                </div>
                                                <div class="carousel-item">
                                                    <?php if ($gb) { ?>
                                                        <img width="100" height="150" src="<?php echo base_url('upload/dokumentasi/') . $gb->nama_file; ?>" alt="">
                                                    <?php } else { ?>
                                                        <img width="100" height="150" src="<?php echo base_url('upload/dokumentasi/noimageavail.jpg'); ?>" alt="">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#dokIndikator" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#dokIndikator" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div id="IsiLaporan" class="col-sm-12">
                                <h4>Isi Laporan:</h4>
                                <p id="isilaporan">
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> -->

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

<script>
    $(document).ready(function() {
        $(document).on('click', '#DetailLap', function() {
            var kodelaporan = $(this).data('kodelaporan');
            var nik = $(this).data('nik');
            var namapelapor = $(this).data('namapelapor');
            var alamatpelapor = $(this).data('alamatpelapor');
            var email = $(this).data('email');
            var nohp = $(this).data('nohp');
            var tgllaporan = $(this).data('tgllaporan');
            var infrastruktur = $(this).data('infrastruktur');
            var koordinatlokasi = $(this).data('koordinatlokasi');
            var namaruasjalan = $(this).data('namaruasjalan');
            var namakabkota = $(this).data('namakabkota');
            var namadistrik = $(this).data('namadistrik');
            var isilaporan = $(this).data('isilaporan');
            // var ktp = $(this).data('ktp');

            $('#kodelaporan').text(kodelaporan);
            $('#nik').text(nik);
            $('#nama_pelapor').text(namapelapor);
            $('#alamat_pelapor').text(alamatpelapor);
            $('#email').text(email);
            $('#nohp').text(nohp);
            $('#tgl_laporan').text(tgllaporan);
            $('#infrastruktur').text(infrastruktur);
            $('#koordinatlokasi').text(koordinatlokasi);
            $('#nama_ruasjalan').text(namaruasjalan);
            $('#nama_kabkota').text(namakabkota);
            $('#nama_distrik').text(namadistrik);
            $('#isilaporan').text(isilaporan);
            // $('#ktp').attr(ktp);

        })
    })
</script>

<script>
    $(document).ready(function() {
        var table = $('#tabelLaporan').DataTable();

        $('#pilihinfrastruktur').on('change', function() {
            table.columns(7).search(this.value).draw();
        });
        $('#pilihlokasi_kabkota').on('change', function() {
            table.columns(5).search(this.value).draw();
        });
        $('#pilihstatus').on('change', function() {
            table.columns(2).search(this.value).draw();
        });
    });
</script>