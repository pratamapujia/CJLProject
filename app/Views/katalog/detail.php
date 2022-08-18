<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>CIPTA JAYA LESTARI</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>
<?php
foreach ($kategori as $key => $value) {
  if ($barang->id_kategori == $value->id_kategori) {
    $nama = $value->nama_kategori;
    if ($barang->id_kategori == '1') {
      $link = 'machinery';
    } elseif ($barang->id_kategori == '2') {
      $link = 'machinetool';
    } elseif ($barang->id_kategori == '3') {
      $link = 'cuttingtool';
    } elseif ($barang->id_kategori == '4') {
      $link = 'measuringtool';
    } elseif ($barang->id_kategori == '5') {
      $link = 'handtool';
    } elseif ($barang->id_kategori == '6') {
      $link = 'cuttingcoolant';
    } else {
      $link = 'abrasive';
    }
  }
  // foreach ($merk as $key => $value) {
  //   if ($barang->id_merk == $value->id_merk) {
  //     $logo = $value->gambar_merk;
  //   }
  // }
} ?>


<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="<?= site_url('home'); ?>">Home</a></li>
        <li><a href="<?= site_url($link); ?>"><?= $nama ?></a></li>
        <li><?= $barang->nama_barang; ?></li>
      </ol>
    </div>
  </section><!-- End Breadcrumbs -->

  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/barang/<?= $barang->gambar_barang; ?>" class="img-content img-fluid" alt="">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2><?= $barang->nama_barang; ?></h2>
            <p class="fw-bold">Deskripsi</p>
            <p><?= $barang->desk_barang != null ? $barang->desk_barang : '-'; ?></p>
            <small class="text-muted lh-1 fw-lighter fst-italic">Untuk info lebih lanjut mengenai produk kami silahkan hubungi sales kami!</small>
            <div class="text-start mt-1">
              <a href="https://wa.me/628123170863" target="_blank" class="btn btn-success d-inline-flex align-items-center justify-content-center align-self-center">
                <img height="20" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png" alt=""> &nbsp; Sales Edi
              </a>
            </div>
            <div class="text-start mt-1">
              <a href="https://wa.me/6281254693810" target="_blank" class="btn btn-success d-inline-flex align-items-center justify-content-center align-self-center">
                <img height="20" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png" alt=""> &nbsp; Sales Ilyas
              </a>
            </div>
            <div class="text-start mt-1">
              <a href="https://wa.me/6281331637497" target="_blank" class="btn btn-success d-inline-flex align-items-center justify-content-center align-self-center">
                <img height="20" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png" alt=""> &nbsp; Sales Rochman
              </a>
            </div>
            <div class="text-start mt-1">
              <a href="https://wa.me6285232777499" target="_blank" class="btn btn-success d-inline-flex align-items-center justify-content-center align-self-center">
                <img height="20" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png" alt=""> &nbsp; Sales Dwi
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?= $this->endSection(); ?>