<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DASHBOARD | SISDA-PABAR</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-57x57.png'); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-60x60.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-76x76.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-114x114.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-144x144.png'); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-152x152.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/backend/assets/favicon/apple-icon-180x180.png'); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/backend/assets/favicon/android-icon-192x192.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/backend/assets/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/backend/assets/favicon/favicon-96x96.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/backend/assets/favicon/favicon-16x16.png'); ?>">
    <link rel="manifest" href="<?php echo base_url('assets/backend/assets/favicon/manifest.json'); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url('assets/backend/assets/favicon/ms-icon-144x144.png'); ?>">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/backend/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/backend/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/backend/assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/backend/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/backend/assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/backend/assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/backend/assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">

    <!-- ===== Editor Text ===== -->
    <!-- <script src="<?php // echo base_url('assets/backend/assets/vendor/tinymce/tinymce.min.js'); ?>"></script> -->

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/backend/assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/backend/assets/css/csstambahan/layout.css'); ?>" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?php echo site_url('admin/dashboard'); ?>" class="logo d-flex align-items-center">
                <img src="<?php echo base_url('assets/backend/assets/img/logopapuabarat.png'); ?>" alt="">
                <span class="d-none d-lg-block">SISDA-PABAR</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <!-- <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div> -->
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <!-- <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li> -->
                <!-- End Search Icon-->

                <!-- <li class="nav-item dropdown"> -->

                <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a> -->
                <!-- End Notification Icon -->

                <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            4 Pengaduan Infrastruktur
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Lihat Semua</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul> -->
                <!-- End Notification Dropdown Items -->

                <!-- </li> -->
                <!-- End Notification Nav -->



                <li class="nav-item dropdown pe-3">
                    <?php $user = $this->ion_auth->user()->row(); ?>
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?php echo base_url('assets/backend/assets/img/profile-img.jpg'); ?>" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php // echo $user->first_name; 
                                                                                ?></span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <!-- <li class="dropdown-header">
                            <h6><?php // echo ($this->ion_auth->get_users_groups()->row()->name == 'admin') ? 'Administrator' : $user->first_name . ' ' . $user->last_name;
                                ?></h6>
                            <span><?php // echo $this->ion_auth->get_users_groups()->row()->name;
                                    ?></span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li> -->

                        <!-- <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Pengaturan Akun</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li> -->

                        <li>
                            <a class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#adminBantuan">
                                <i class="bi bi-question-circle"></i>
                                <span>Panduan Admin</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo site_url('auth/logout'); ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Keluar</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link <?php echo ($this->uri->segment(2) == 'dashboard') ? '' : 'collapsed'; ?>" href="<?php echo site_url('admin/dashboard') ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Laporan Pengaduan</li>

            <li class="nav-item">
                <a class="nav-link  <?php echo ($this->uri->segment(2) == 'pengaduan') ? '' : 'collapsed'; ?>" href="<?php echo site_url('admin/pengaduan'); ?>">
                    <i class="bi bi-menu-button-wide"></i><span>Data Pengaduan</span>

                </a>

            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link  <?php echo ($this->uri->segment(2) == 'download') ? '' : 'collapsed'; ?>" href="<?php echo site_url('admin/download'); ?>">
                    <i class="bi bi-journal-text"></i><span>Unduh Laporan</span>
                </a>

            </li><!-- End Forms Nav -->


            <li class="nav-heading">Manajemen Pengguna</li>

            <li class="nav-item">
                <a class="nav-link  <?php echo ($this->uri->segment(2) == 'akunpengguna') ? '' : 'collapsed'; ?>" href="<?php echo site_url('admin/akunpengguna') ?>">
                    <i class="bi bi-person"></i>
                    <span>Akun Pengguna</span>
                </a>
            </li>

            <li class="nav-heading">Manajemen Website</li>

            <!-- <li class="nav-item">
                <a class="nav-link  <?php //echo ($this->uri->segment(2) == 'profil') ? '' : 'collapsed'; 
                                    ?>" href="<?php //echo site_url('admin/profil') 
                                                ?>">
                    <i class="bi bi-info-circle"></i>
                    <span>Profil</span>
                </a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link  <?php echo ($this->uri->segment(2) == 'berita') ? '' : 'collapsed'; ?>" href="<?php echo site_url('admin/berita') ?>">
                    <i class="bi bi-images"></i>
                    <span>Berita</span>
                </a>
            </li>

            <!-- End Profile Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->




    <?php
    if (isset($_view) && $_view)
        $this->load->view($_view);
    ?>

    <div class="modal fade" id="adminBantuan" tabindex="-1" aria-labelledby="adminBantuanLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adminBantuanLabel">Panduan Singkat Panel Admin SISDA-PABAR</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="datapengaduan-tab" data-bs-toggle="tab" data-bs-target="#datapengaduan" type="button" role="tab" aria-controls="datapengaduan" aria-selected="false">Data Pengaduan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="unduhlaporan-tab" data-bs-toggle="tab" data-bs-target="#unduhlaporan" type="button" role="tab" aria-controls="unduhlaporan" aria-selected="false">Unduh Laporan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="akunpengguna-tab" data-bs-toggle="tab" data-bs-target="#akunpengguna" type="button" role="tab" aria-controls="akunpengguna" aria-selected="false">Akun Pengguna</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="berita-tab" data-bs-toggle="tab" data-bs-target="#berita" type="button" role="tab" aria-controls="berita" aria-selected="false">Berita</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade mt-3 show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                Pada bagian ini, Anda akan menemukan data laporan sesuai dengan jenis infrastruktur, diantaranya:
                                <ul>
                                    <li>Total laporan masuk sesuai dengan jenis infrastruktur</li>
                                    <li>Grafik bulanan laporan pengaduan sesuai dengan infrastrukur</li>
                                    <li>Diagram laporan pengaduan sesuai dengan kabupaten/kota</li>
                                    <li>Laporan pengaduan yang masuk (sampai saat ini), dan</li>
                                    <li>Lima berita terakhir yang telah diunggah melalui admin panel.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade mt-3" id="datapengaduan" role="tabpanel" aria-labelledby="datapengaduan-tab">
                                Halaman data pengaduan berisi laporan masuk. Pada bagian ini Anda dapat:
                                <ul>
                                    <li>
                                        Melakukan filter terhadap laporan yang telah masuk, baik berdasarkan infrastruktur, kabupaten/kota, maupun berdasarkan status laporan.
                                    </li>
                                    <li>Mencari laporan secara spesifik dengan memanfaatkan fasilitas Cari Laporan;</li>
                                    <li>Menyortir laporan berdasarkan aksi, status, tanggal laporan, kode laporan, kabupaten/kota, isi laporan, infrastrukur, dan lokasi;</li>
                                    <li>Melihat detail laporan;</li>
                                    <li>Menerima laporan masuk; dan</li>
                                    <li>Menolak laporan masuk.</li>
                                </ul>




                            </div>
                            <div class="tab-pane fade mt-3" id="unduhlaporan" role="tabpanel" aria-labelledby="unduhlaporan-tab">
                                Jika ingin mencetak laporan atau mengunduhnya dalam bentuk file excel atau pdf, Anda dapat masuk ke halaman Unduh Laporan. Di halaman ini Anda dapat:
                                <ul>
                                    <li>Memilih laporan sesuai dengan jenis infrastruktur yang akan diunduh;</li>
                                    <li>Memilih laporan berdasarkan kabupaten/kota yang akan diunduh;</li>
                                    <li>Memilih rentang waktu laporan yang akan diunduh;</li>
                                    <li>Memilih format laporan yang akan diunduh;</li>
                                    <li>Memilih status laporan yang akan diunduh; dan</li>
                                    <li>Memilih jenis laporan yang akan diunnduh apakah dengan gambar aatau tidak.</li>
                                </ul>

                            </div>
                            <div class="tab-pane fade mt-3" id="akunpengguna" role="tabpanel" aria-labelledby="akunpengguna-tab">
                                Pada halaman ini, seorang admin dapat:
                                <ul>
                                    <li>Membuat akun admin baru;</li>
                                    <li>Mengaktifkan/menonaktifkan akun admin; dan</li>
                                    <li>Menghapus akun admin.</li>
                                </ul>

                            </div>
                            <div class="tab-pane fade mt-3" id="berita" role="tabpanel" aria-labelledby="berita-tab">
                                Pada halaman ini, Admin dapat:
                                <ul>
                                    <li>Menambahkan berita baru;</li>
                                    <li>Mengubah berita yang telah dipublikasi (edit);</li>
                                    <li>Mnghapus berita yang telah dipublikasi; dan</li>
                                    <li>Mengaktikfan/menonaktifkan slider. Bagian slider ini untuk menjadikan gambar yang diunggah ketika menunggah berita baru muncul di bagian slider halaman beranda sisdapabar.com.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    </div>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>SISDA-PABAR</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets/backend/assets/vendor/bootstrap/js/bootstrap.bundle.js'); ?>"></script>
    <script src="<?php echo base_url('assets/backend/assets/vendor/php-email-form/validate.js'); ?>"></script>
    <script src="<?php echo base_url('assets/backend/assets/vendor/quill/quill.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/backend/assets/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
    <script src="<?php echo base_url('assets/backend/assets/vendor/chart.js/chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/backend/assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/backend/assets/vendor/echarts/echarts.min.js'); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/backend/assets/js/main.js'); ?>"></script>

</body>

</html>