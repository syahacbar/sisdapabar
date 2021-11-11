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

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/backend/assets/css/style.css'); ?>" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

    <style>
        input {
            width: 100%;
            padding: 2px 10px;
            border: 1px solid #0d6efd;
            border-radius: 5px;
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            font-size: 1rem;
            line-height: 1.25;
            color: #55595c;
            background-color: #fff;
            background-image: none;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: 0.25rem;
        }

        .col-sm-6 {
            width: 100% !important;
        }

        label {
            display: inline-block;
            margin-bottom: 0.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        textarea:focus,
        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="datetime"]:focus,
        input[type="datetime-local"]:focus,
        input[type="date"]:focus,
        input[type="month"]:focus,
        input[type="time"]:focus,
        input[type="week"]:focus,
        input[type="number"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="color"]:focus,
        .uneditable-input:focus {
            border-color: #ced4da;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(126, 239, 104, 0.6);
            outline: 0 none;
        }
    </style>

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

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
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

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->



                <li class="nav-item dropdown pe-3">
                    <?php $user = $this->ion_auth->user()->row(); ?>

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?php echo base_url('assets/backend/assets/img/profile-img.jpg'); ?>" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php //echo $user->first_name;
                                                                                ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo ($this->ion_auth->get_users_groups()->row()->name == 'admin') ? 'Administrator' : $user->first_name . ' ' . $user->last_name; ?></h6>
                            <span><?php echo $this->ion_auth->get_users_groups()->row()->name; ?></span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Pengaturan Akun</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
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

                    </ul><!-- End Profile Dropdown Items -->
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


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Pengaduan</h1>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">



                    <!-- Filter dan Picker -->
                    <div class="row mb-4">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-info-circle me-1"></i>
                                    <?php echo lang('edit_user_subheading'); ?>
                                </div>
                                <div class="card-body">
                                    <div id="infoMessage"><?php echo $message; ?></div>
                                    <?php echo form_open(uri_string()); ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country" class="control-label">Nama Depan</label>
                                                <div class="col-sm-6">
                                                    <?php echo form_input($first_name); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country" class="control-label">Nama belakang</label>
                                                <div class="col-sm-6">
                                                    <?php echo form_input($last_name); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label for="country" class="control-label">Nama Instansi</label>
                                                <div class="col-sm-6">
                                                    <?php echo form_input($company); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country" class="control-label">Nomor WhatsApp</label>
                                                <div class="col-sm-6">
                                                    <?php echo form_input($phone); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country" class="control-label">Kata Sandi</label>
                                                <div class="col-sm-6">
                                                    <?php echo form_input($password); ?>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country" class="control-label">Konfirmasi Kata Sandi</label>
                                                <div class="col-sm-6">
                                                    <?php echo form_input($password_confirm); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <?php if ($this->ion_auth->is_admin()) :
                                            ?>
                                                <?php foreach ($groups as $group) :
                                                ?>
                                                    <label class="checkbox">
                                                        <label for="country" class="control-label"><?php echo lang('edit_user_groups_heading');
                                                                                                    ?></label>
                                                        <input class="form-check-input" type="checkbox" name="groups[]" value="<?php echo $group['id'];
                                                                                                                                ?>" <?php echo (in_array($group, $currentGroups)) ? 'checked="checked"' : null;
                                                                                                                                    ?>>
                                                        <?php echo htmlspecialchars($group['description'], ENT_QUOTES, 'UTF-8');
                                                        ?>
                                                    </label>
                                                <?php endforeach
                                                ?>
                                            <?php endif
                                            ?>

                                        </div>


                                    </div>


                                    <?php echo form_hidden('id', $user->id); ?>
                                    <?php echo form_hidden($csrf); ?>

                                    <br>

                                    <div class="row">
                                        <div class="input-group">
                                            <?php echo form_submit('submit', lang('edit_user_submit_btn'), array('class' => 'btn btn-sm btn-primary', 'Simpan')); ?>
                                        </div>
                                    </div>

                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



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
    <script src="<?php echo base_url('assets/backend/assets/vendor/tinymce/tinymce.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/backend/assets/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
    <script src="<?php echo base_url('assets/backend/assets/vendor/chart.js/chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/backend/assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/backend/assets/vendor/echarts/echarts.min.js'); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/backend/assets/js/main.js'); ?>"></script>

</body>

</html>