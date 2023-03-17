<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin | CJL</title>
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main/app.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main/app-dark.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/pages/auth.css">
  <link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/icon/logocjl.png" type="image/x-icon">
</head>

<body>
  <script src="<?= base_url(); ?>/assets/js/initTheme.js"></script>
  <div id="auth">
    <!-- <div class="row h-100"> -->
    <div class="col-lg-6">
      <div id="auth-left">
        <div class="auth-logo">
          <a href="<?= site_url('home'); ?>"><img src="<?= base_url(); ?>/assets/img/icon/logocjl.png" alt="Logo" width="50"></a>
        </div>
        <h1 class="auth-title">Log in.</h1>
        <form method="POST" action="<?= site_url('auth/loginProcess'); ?>" data-parsley-validate>
          <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible show fade">
              <?= session()->getFlashdata('error'); ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>
          <?= csrf_field(); ?>
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" class="form-control form-control-xl" name="email" placeholder="Email" tabindex="1" data-parsley-required="true" />
            <div class="form-control-icon">
              <i class="bi bi-person"></i>
            </div>
          </div>
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-xl" name="password" tabindex="2" placeholder="Password" data-parsley-required="true" />
            <div class="form-control-icon">
              <i class="bi bi-shield-lock"></i>
            </div>
          </div>
          <div class="form-check form-check-lg d-flex align-items-end">
            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
            <label class="form-check-label text-gray-600" for="flexCheckDefault">
              Keep me logged in
            </label>
          </div>
          <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            Log in
          </button>
        </form>
      </div>
    </div>
    <!-- <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right"></div>
      </div> -->
    <!-- </div> -->
  </div>

  <script src="<?= base_url(); ?>/assets/extensions/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/bootstrap.js"></script>
  <script src="<?= base_url(); ?>/assets/extensions/parsleyjs/parsley.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/pages/parsley.js"></script>
</body>

</html>