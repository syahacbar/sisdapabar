<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LOGIN | SISDA-PABAR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
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
  <link href="<?php echo base_url('assets/backend/assets/css/csstambahan/login.css'); ?>" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <!-- <img src="assets/img/logo.png" alt=""> -->
                  <span class="d-none d-lg-block">Selamat Datang</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3 card-loginpage">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4"></h5>
                    <p class="text-center small">Silakan login dengan menginput email/nama pengguna dan kata sandi Anda pada kolom di bawah ini.</p>
                  </div>

                  <!-- <form class="row g-3 needs-validation" novalidate> -->
                  <?php echo $this->session->flashdata('message'); ?></p>
                  <?php echo form_open("auth/login"); ?>
                  <div class="col-12">
                    <label for="identity" class="form-label">Email/Username</label>
                    <input type="text" name="identity" class="form-control" id="identity" required>
                    <div class="invalid-feedback">Email atau Nama Pengguna harus diisi!</div>
                  </div>

                  <div class="col-12 mt-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    <div class="invalid-feedback">Kata sandi harus diisi!</div>
                  </div>

                  <div class="col-12 mb-3 mt-3">
                    <p class="small mb-0 text-center"><a href="<?php echo base_url('auth/forgot_password') ?>">Lupa kata sandi?</a></p>
                  </div>

                  <div class="col-12">
                    <button class="btn btn-primary w-100 btn-loginpage" name="submit" type="submit">MASUK</button>
                  </div>

                  <?php echo form_close(); ?>

                  <!-- </form> -->

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>/assets/backend/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?php echo base_url(); ?>/assets/backend/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>/assets/backend/assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/backend/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/backend/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url(); ?>/assets/backend/assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/backend/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/backend/assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>/assets/backend/assets/js/main.js"></script>

</body>

</html>