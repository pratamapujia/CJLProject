<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>Home | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>

<!-- ======= Carousel Section ======= -->
<div id="carouselku" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url(); ?>/assets/img/slider1.jpg" class="d-block w-100" alt="slider">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url(); ?>/assets/img/slider2.jpg" class="d-block w-100" alt="slider">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url(); ?>/assets/img/slider3.jpg" class="d-block w-100" alt="slider">
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

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Our Products</p>
      </header>

      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">

          <?php foreach ($merk as $key => $value) : ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="<?= base_url(); ?>/assets/img/logo/<?= $value->gambar_merk; ?>" class="testimonial-img" alt="">
                </div>
              </div>
            </div><!-- End testimonial item -->
          <?php endforeach; ?>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- End Testimonials Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container mb-3" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Machinery</h2>
            <p>
              Tersedia berbagai macam - macam mesin yang anda butuhkan untuk perusahaan anda!
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= site_url('pages/machinery'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Disini</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/machine.jpg" class="img-fluid shadow" alt="">
        </div>
      </div>
    </div>

    <div class="container mb-3" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/machinetool.jpg" class="img-fluid shadow" alt="">
        </div>
        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Machine Tools Accesories</h2>
            <p>
              Tersedia berbagai macam - macam tools untuk mesin yang anda punya!
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= site_url('pages/machinery'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Disini</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-3" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Cutting Tools</h2>
            <p>
              Tersedia berbagai macam - macam Cutting Tools untuk anda!
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= site_url('pages/machinery'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Disini</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/cuttingtool.jpg" class="img-fluid shadow" alt="">
        </div>
      </div>
    </div>

    <div class="container mb-3" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/measuringtool.jpg" class="img-fluid shadow" alt="">
        </div>
        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Measuring Tools</h2>
            <p>
              Tersedia berbagai macam - macam Measuring Tools untuk anda!
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= site_url('pages/machinery'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Disini</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-3" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Hand Tools</h2>
            <p>
              Tersedia berbagai macam - macam Hand Tools untuk anda!
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= site_url('pages/machinery'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Disini</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/handtool.jpg" class="img-fluid shadow" alt="">
        </div>
      </div>
    </div>

    <div class="container mb-3" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/cuttingcoolant.jpg" class="img-fluid shadow" alt="">
        </div>
        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Cutting Coolant</h2>
            <p>
              Tersedia berbagai macam - macam Cutting Coolant untuk anda!
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= site_url('pages/machinery'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Disini</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-3" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-7 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h2>Abrasive</h2>
            <p>
              Tersedia berbagai macam - macam Abrasive untuk anda!
            </p>
            <div class="text-center text-lg-start">
              <a href="<?= site_url('pages/machinery'); ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lihat Disini</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>/assets/img/abrasive.jpg" class="img-fluid shadow" alt="">
        </div>
      </div>
    </div>

  </section><!-- End About Section -->

</main><!-- End #main -->

<?= $this->endSection(); ?>