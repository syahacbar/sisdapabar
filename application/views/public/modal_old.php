<!-- Modal -->
<div class="modal fade" id="detailLaporan" tabindex="-1" role="dialog" aria-labelledby="detailLaporanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="detailLaporanLabel"><i class="bi bi-file-earmark-fill"></i>Detail Laporan <?php echo $p->kodelaporan; ?></h3>
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