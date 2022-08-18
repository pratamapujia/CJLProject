<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?= $this->renderSection('title'); ?>

  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>/assets/img/icon/logocjl.png" rel="icon">

  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/landing/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/landing/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/landing/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>/assets/landing/css/style.css" rel="stylesheet">


</head>

<body>

  <?= $this->include('layout/navbar'); ?>

  <?= $this->renderSection('home'); ?>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="/" class="logo d-flex align-items-center">
              <img src="<?= base_url(); ?>/assets/img/icon/logocjl.png" alt="Logo">
              <span>Cipta Jaya Lestari</span>
            </a>
            <p>Metalworking and Machinery</p>
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              <strong>Phone Office</strong><br>
              <i class="bi bi-telephone"></i> 031-3896920 <br>
              <strong>E-mail</strong><br>
              <i class="bi bi-envelope"></i> <a class="text-dark " href="mailto:ciptajayalestari@gmail.com"> <u>ciptajayalestari@gmail.com</u></a>
            </p>
            <p>
              <strong>Office</strong><br>
              <i class="bi bi-house-door"></i> Jalan Kenjeran 300, Block A-7 <br>
              Surabaya, Jawa Timur, 60145 <br>
              Indonesia
            </p>
            <p>
              <strong>Warehouse</strong><br>
              <i class="bi bi-building"></i> Kompleks Pergudangan SiRIE S-7<br>
              Lingkar Timur, Sidoarjo <br>
              Jawa Timur
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-contact text-center text-md-start">
            <h4>Phone Sales</h4>
            <p>
              <strong>Customer Service</strong><br>
              <a href="https://api.whatsapp.com/send?phone=6281335700084&amp;text=Halo Sales Counter, Saya dapat nomor dari www.ciptajayalestari.id"><img height="30" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png"> +62 81335700084</a>
            </p>
            <p>
              <strong>Pak Edi</strong><br>
              <a href="https://api.whatsapp.com/send?phone=628123170863&amp;text=Halo Pak Edi, Saya dapat nomor dari www.ciptajayalestari.id"><img height="30" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png"> +62 8123170863</a>
            </p>
            <p>
              <strong>Pak Ilyas</strong><br>
              <a href="https://api.whatsapp.com/send?phone=6281254693810&amp;text=Halo Pak Ilyas, Saya dapat nomor dari www.ciptajayalestari.id"><img height="30" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png"> +62 81254693810</a>
            </p>
            <p>
              <strong>Pak Rochman</strong><br>
              <a href="https://api.whatsapp.com/send?phone=6281331637497&amp;text=Halo Pak Rochman, Saya dapat nomor dari www.ciptajayalestari.id"><img height="30" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png"> +62 81331637497</a>
            </p>
            <p>
              <strong>Pak Dwiono</strong><br>
              <a href="https://api.whatsapp.com/send?phone=6285232777499&amp;text=Halo Pak Dwiono, Saya dapat nomor dari www.ciptajayalestari.id"><img height="30" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png"> +62 85232777499</a>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Cipta Jaya Lestari</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>/assets/landing/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?= base_url(); ?>/assets/landing/aos/aos.js"></script>
  <script src="<?= base_url(); ?>/assets/landing/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>/assets/landing/js/main.js"></script>

</body>

</html>