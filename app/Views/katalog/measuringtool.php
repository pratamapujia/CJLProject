<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>Measuring Tools | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>

<style>
  .card-title {
    color: #012970;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="<?= site_url('home'); ?>">Home</a></li>
        <li>Measuring</li>
      </ol>
    </div>
  </section><!-- End Breadcrumbs -->

  <section class="p-5 container-fluid">
    <div class="row">
      <?php foreach ($barang as $key => $value) : ?>
        <div class="col-sm-4 col-md-4 col-lg-2 mb-4">
          <div class="card shadow-sm">
            <div class="card-img-overlay" style="height: 22pt;">
              <img src="<?= base_url(); ?>/assets/img/logo/<?= $value->gambar_merk; ?>" height="22" alt="Merek">
            </div>
            <img src="<?= base_url(); ?>/assets/img/barang/<?= $value->gambar_barang; ?>" class="card-img-top" height="200" alt="G.Barang">
            <div class="card-body text-center">
              <p class="card-title">
                <?= $value->nama_barang; ?>
              </p>
              <div class="d-grid gap-2">
                <a href="<?= site_url('katalog/detail/' . $value->id_barang); ?>" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?= $pager->links('default', 'pagination') ?>
  </section>
</main>

<?= $this->endSection(); ?>