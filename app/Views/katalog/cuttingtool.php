<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>Cutting Tools | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="<?= site_url('home'); ?>">Home</a></li>
        <li>Cutting Tools</li>
      </ol>
    </div>
  </section><!-- End Breadcrumbs -->

  <section class="p-5 container-fluid">
    <div class="row">
      <?php foreach ($barang as $key => $value) : ?>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card shadow-sm">
            <img src="<?= base_url(); ?>/assets/img/barang/<?= $value->gambar_barang; ?>" class="card-img" height="200" alt="">
            <div class="card-img-overlay">
              <img src="<?= base_url(); ?>/assets/img/logo/<?= $value->gambar_merk; ?>" height="42" alt="">
            </div>
            <div class="card card-body">
              <p class="card-title" style="color:#012970 ;">
                <?= $value->nama_barang; ?>
              </p>
              <a href="<?= site_url('katalog/detail/' . $value->id_barang); ?>" class="btn btn-primary btn-block">Lihat Detail</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?= $pager->links('default', 'pagination') ?>
  </section>
</main>

<?= $this->endSection(); ?>