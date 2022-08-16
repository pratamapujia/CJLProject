<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>Home | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>

<!-- ======= Carousel Section ======= -->
<div id="carouselku" class="carousel slide pt-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url(); ?>/assets/img/about1.jpg" class="d-block w-100" alt="about">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url(); ?>/assets/img/about2.jpg" class="d-block w-100" alt="about">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url(); ?>/assets/img/about3.jpg" class="d-block w-100" alt="about">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselku" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselku" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End Carousel -->

<main id="main">
  <section class="container">
    <div class="teks">
      <div class="judul">
        <h2 class="fw-bold">Profil Perusahaan</h2>
      </div>
      <div class="deskripsi">
        <p class="lh-base">
          CV. CIPTA JAYA LESTARI berdiri sejak tahun 1998 kami berlokasi di Jalan Kenjeran 300 Ruko Center Point A-7, Surabaya sebagai showroom, office, dan warehouse dengan spirit dan manajemen baru.
        </p>
        <p class="lh-base">
          Kami selalu memberikan pelayanan yang nyaman, aman, dan terpercaya pada customer kami.
        </p>
        <p class="lh-base">
          Banyak item tersedia dalam ready stock dan fast delivery.
        </p>
        <p class="lh-base">
          Kami juga dibackup engineers yang berpengalaman untuk mengatasi masalah anda serta melakukan maintenance mesin - mesin yang kami jual.
        </p>
        <p class="lh-base">
          Kami melayani dengan prinsip 3<strong>S</strong> (<strong>S</strong>ales, <strong>S</strong>ervice, dan <strong>S</strong>pare Part)
        </p>
        <p class="lh-base">
          Kami telah memasok berbagai metalworking machine baik CNC maupun konvensional juga aksesoris mesin, cutting tools, hand tools, abrasives, dan equipment yang berasal dari mancanegara, Germany, Swiss, Japan, Taiwan, dll. Dengan kualitas yang bermutu tinggi.
        </p>
      </div>
    </div>
  </section>
</main><!-- End #main -->

<?= $this->endSection(); ?>