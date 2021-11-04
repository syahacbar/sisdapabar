<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
 
                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h3 class="card-title">Irigasi</h3>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="https://sda.pu.go.id/assets/uploads/gallery/a6fc3-picture18.png" width="80" height="50">
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo $count_irigasi;?> Laporan</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Sungai</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="https://sda.pu.go.id/assets/uploads/gallery/423b1-picture13.jpg" width="80" height="50">
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo $count_sungai;?> Laporan</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Pantai</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="https://sda.pu.go.id/assets/uploads/gallery/9cafc-picture20.jpg" width="80" height="50">
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo $count_pantai;?> Laporan</h6>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title">Laporan Pengaduan <span>| Bulan</span></h5>

                                <!-- Line Chart -->
                                <div id="reportsChart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                            series: [
                                            <?php foreach($list_infra AS $li) : ?>
                                            {
                                                name: '<?php echo $li->infrastruktur; ?>',
                                                data: 
                                                [
                                                <?php
                                                  $CI =& get_instance();
                                                  $CI->load->model('M_pengaduan');
                                                  $cm= $CI->M_pengaduan->count_by_month($li->infrastruktur,3);
                                                  foreach($cm AS $cmx):
                                                    echo $cmx->jumlah.',';
                                                    endforeach;
                                                ?>
                                                ],
                                            },
                                            <?php endforeach;?>
                                            ],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 4
                                            },
                                            colors: ['#ff771d', '#0dcaf0', '#4154f1'],
                                            fill: {
                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 2
                                            },
                                            xaxis: {
                                                type: 'month',
                                                categories: [<?php foreach($list_month AS $lm) : echo '"'.medium_bulan($lm->bulan).'-'.$lm->tahun.'",'; endforeach; ?>]
                                            },
                                            tooltip: {
                                                x: {
                                                    format: 'dd/MM/yy HH:mm'
                                                },
                                            }
                                        }).render();
                                    });
                                </script>
                                <!-- End Line Chart -->

                            </div>

                        </div>
                    </div><!-- End Reports -->

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales">

                            <div class="card-body">
                                <h5 class="card-title">Laporan Pengaduan <span>| Terkini</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Pelapor</th>
                                            <th scope="col">Laporan</th>
                                            <th scope="col">Lokasi</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($pengaduan AS $peng) : ?>
                                        <tr>
                                            <th scope="row"><?php echo $peng->kodelaporan;?></th>
                                            <td><?php echo mediumdate_indo(substr($peng->tgl_laporan,0,10));?></td>
                                            <td><?php echo $peng->nama_pelapor;?></td>
                                            <td><?php echo $peng->nama_ruasjalan;?></td>
                                            <td><?php echo ucwords(strtolower($peng->nama_kabkota));?></td>
                                            <td>
                                                <?php if($peng->status == 'Menunggu') { ?>
                                                <span class="badge bg-warning"><?php echo $peng->status;?></span>
                                            <?php } elseif ($peng->status == 'Diterima') { ?>
                                                <span class="badge bg-success"><?php echo $peng->status;?></span>
                                            <?php } elseif ($peng->status == 'Ditolak') { ?>
                                                <span class="badge bg-danger"><?php echo $peng->status;?></span>
                                            <?php } ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                       
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

                   

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">


                <!-- Website Traffic -->
                <div class="card">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Laporan Pengaduan <span>| Kab./Kota</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '2%',
                                        left: 'center',
                                        show: true
                                    },
                                    series: [{
                                        top: '20%',
                                        name: 'Wilayah',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '14',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: true
                                        },

                                        data: [
                                        <?php 
                                            foreach($count_kab AS $ck) :
                                        ?>
                                            {
                                                value: <?php echo $ck->jumlah;?>,
                                                name: '<?php echo $ck->nama;?>'
                                            },
                                        <?php endforeach;?>    
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->

                <!-- News & Updates Traffic -->
                <div class="card">

                    <div class="card-body pb-0">
                        <h5 class="card-title">Berita Terbaru </h5>

                        <div class="news">
                        <?php foreach ($berita AS $news) : ?>
                            <div class="post-item clearfix">
                            <?php
                              $CI =& get_instance();
                              $CI->load->model('M_berita');
                              $gb= $CI->M_berita->get_image($news->id);
                            ?>
                                <img src="<?php echo base_url('upload/berita/').$gb->nama_file; ?>" alt="">
                                <h4><a href="#"><?php echo $news->judul;?></a></h4>
                                <p><?php echo word_limiter($news->isi, 20);?></p>
                            </div>
                        <?php endforeach;?>

                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

        </div>
    </section>

</main>
<!-- End #main -->