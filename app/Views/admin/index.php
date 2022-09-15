<?= $this->extend('admin/layouts/default'); ?>

<?= $this->section('title'); ?>
<title>Beranda</title>
<?= $this->endSection(); ?>

<?= $this->section('main'); ?>


<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Dashboard</h3>
      </div>
    </div>
  </div>
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Hallo, Admin <?= userLogin()->nama_admin; ?></h4>
      </div>
      <div class="card-body">
        <p style="font-size:1.1rem ;">Ini adalah Halaman Admin yang berfungsi untuk melakukan segala aktivitas <span class="text-primary">Tambah Data</span>, <span style="color: #ff6f00 ;">Edit Data</span>, dan <span class="text-danger">Hapus Data</span></p>
      </div>
    </div>
  </section>
</div>
<div class="page content">
  <section class="row">
    <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body px-4 py-4-5">
          <div class="row">
            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
              <div class="stats-icon purple mb-2">
                <i class="bi bi-person-fill" style="padding-right: 58%; padding-bottom: 90%;"></i>
              </div>
            </div>
            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
              <h6 class="text-muted font-semibold">Total Sales</h6>
              <h6 class="font-extrabold mb-0"><?= countData('sales'); ?> Sales</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body px-4 py-4-5">
          <div class="row">
            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
              <div class="stats-icon blue mb-2">
                <i class="bi bi-tags-fill" style="padding-right: 58%; padding-bottom: 90%;"></i>
              </div>
            </div>
            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
              <h6 class="text-muted font-semibold">Total Merek</h6>
              <h6 class="font-extrabold mb-0"><?= countData('merk'); ?> Merek</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body px-4 py-4-5">
          <div class="row">
            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
              <div class="stats-icon green mb-2">
                <i class="bi bi-bookmarks-fill" style="padding-right: 58%; padding-bottom: 90%;"></i>
              </div>
            </div>
            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
              <h6 class="text-muted font-semibold">Total Kategori</h6>
              <h6 class="font-extrabold mb-0"><?= countData('kategori'); ?> Kategori</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body px-4 py-4-5">
          <div class="row">
            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
              <div class="stats-icon red mb-2">
                <i class="bi bi-boxes" style="padding-right: 58%; padding-bottom: 90%;"></i>
              </div>
            </div>
            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
              <h6 class="text-muted font-semibold">Total Barang</h6>
              <h6 class="font-extrabold mb-0"><?= countData('barang'); ?> Barang</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>