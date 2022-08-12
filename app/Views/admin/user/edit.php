<?= $this->extend('admin/layouts/default'); ?>

<?= $this->section('title'); ?>
<title>Edit Data Admin | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('main'); ?>


<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Form Edit Data</h3>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <div class="float-start float-lg-end">
          <a href="<?= site_url('users'); ?>" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
        </div>
        <!-- <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
          </ol>
        </nav> -->
      </div>
    </div>
  </div>
  <?php $errors = session()->getFlashdata('errors') ?>
  <section class="section mt-2">
    <div class="card">
      <div class="card-body">
        <?php $validation = \Config\Services::validation(); ?>
        <form action="<?= site_url('users/' . $users->id_admin); ?>" class="form" method="POST" autocomplete="off">
          <div class="row">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="PATCH">
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label>Nama Lengkap <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control <?= $validation->hasError('nama_admin') ? 'is-invalid' : null ?>" name="nama_admin" value="<?= old('nama_admin'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('nama_admin'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label>E-mail <strong class="text-danger">*</strong></label>
                <input type="email" class="form-control <?= $validation->hasError('email') ? 'is-invalid' : null ?>" name="email">
                <div class="invalid-feedback">
                  <?= $validation->getError('email'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label>Usename <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control <?= $validation->hasError('username') ? 'is-invalid' : null ?>" name="username">
                <div class="invalid-feedback">
                  <?= $validation->getError('username'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label>Password <strong class="text-danger">*</strong></label>
                <input type="password" class="form-control <?= $validation->hasError('password') ? 'is-invalid' : null ?>" name="password">
                <div class="invalid-feedback">
                  <?= $validation->getError('password'); ?>
                </div>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-start">
              <button type="reset" class="btn btn-light-secondary mb-1">Reset</button>
              <button type="submit" class="btn btn-primary ms-2 mb-1"><i class="bi bi-send"></i> Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </section>
</div>

<?= $this->endSection(); ?>