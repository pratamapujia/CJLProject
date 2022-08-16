<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>Machine Tools | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="<?= site_url('home'); ?>">Home</a></li>
        <li>Catalogue</li>
        <li>Machine Tools</li>
      </ol>
    </div>
  </section><!-- End Breadcrumbs -->

  <section class="p-5 container-fluid">
    <div class="row">
      <?php foreach ($barang as $key => $value) : ?>
        <div class="col-lg-3">
          <div class="card shadow-sm">
            <img src="<?= base_url(); ?>/assets/img/barang/<?= $value->gambar_barang; ?>" class="card-img" height="200" alt="">
            <div class="card-img-overlay">
              <img src="<?= base_url(); ?>/assets/img/logo/<?= $value->gambar_merk; ?>" height="42" alt="">
            </div>
            <div class="card card-body">
              <p class="card-title" style="color:#012970 ;">
                <?= $value->nama_barang; ?>
              </p>
              <a href="" class="btn btn-primary btn-block">Lihat Detail</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?= $pager->links('default', 'pagination') ?>
  </section>

  <!-- ======= Blog Section ======= -->
  <!-- <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">
          <div class="col-lg-4 entries">
            <article class="entry">
              <div class="entry-img">
                
                <img src="" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                
              </h2>
              <div class="entry-content">
                <div class="read-more">
                  <a href="">Lihat Detail</a>
                </div>
              </div>
            </article>
          </div>
        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div>

      </div>
    </div>
  </section> -->
  <!-- End Blog Section -->
</main>

<?= $this->endSection(); ?>