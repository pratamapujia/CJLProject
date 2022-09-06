<?= $this->extend('admin/layouts/default'); ?>

<?= $this->section('title'); ?>
<title>Tambah Data Sales | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('main'); ?>


<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Form Tambah Data</h3>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <div class="float-start float-lg-end">
          <a href="<?= site_url('sales'); ?>" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
        </div>
      </div>
    </div>
  </div>
  <?php $errors = session()->getFlashdata('errors') ?>
  <section class="section mt-2">
    <div class="card">
      <div class="card-body">
        <?php $validation = \Config\Services::validation(); ?>
        <form action="<?= site_url('sales'); ?>" class="form" method="POST" autocomplete="off">
          <div class="row">
            <?= csrf_field(); ?>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label>Nama Lengkap <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control <?= $validation->hasError('nama_sales') ? 'is-invalid' : null ?>" name="nama_sales" value="<?= old('nama_sales'); ?>">
                <div class="invalid-feedback">
                  <?= $validation->getError('nama_sales'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label>No Telephone <strong class="text-danger">*</strong></label>
                <input type="number" class="form-control <?= $validation->hasError('phone_sales') ? 'is-invalid' : null ?>" name="phone_sales">
                <div class="invalid-feedback">
                  <?= $validation->getError('phone_sales'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label>Alamat Lengkap <strong class="text-danger">*</strong></label>
                <input type="text" class="form-control <?= $validation->hasError('alamat_sales') ? 'is-invalid' : null ?>" name="alamat_sales">
                <div class="invalid-feedback">
                  <?= $validation->getError('alamat_sales'); ?>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label>Tanggal Lahir <strong class="text-danger">*</strong></label>
                <input type="date" class="form-control <?= $validation->hasError('tgl_lahir_sales') ? 'is-invalid' : null ?>" name="tgl_lahir_sales">
                <div class="invalid-feedback">
                  <?= $validation->getError('tgl_lahir_sales'); ?>
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