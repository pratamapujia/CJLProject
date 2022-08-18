<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>CIPTA JAYA LESTARI</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="<?= site_url('home'); ?>">Home</a></li>
      <li>About Us</li>
    </ol>
  </div>
</section><!-- End Breadcrumbs -->
<!-- ======= Carousel Section ======= -->
<div id="carouselku" class="carousel slide" data-bs-ride="carousel">
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
<section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Our Sales Team</h2>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="/assets/img/sales/edi.jpg" alt="Sales 1" />
                            <h5>Pak Edi</h5>
                            <div class="phone-domain">
                              <div style="padding: 6px 10px">
                                  <img src="/assets/img/whatsapp.png" alt="" style="margin-right: 5px; height: 30px; width: 30px" /><span class="" style="float: left; background-color: #25d366"></span>
                                  <a target="_blank" href="https://api.whatsapp.com/send?phone=628123170863&amp;text=Halo Pak Edi, Saya dapat nomor dari www.ciptajayalestari.id" class="nobor" style="font-size: 18px">
                                      <span class="hidden-md-down" style="color: #25d366">Chat Now</span></a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="/assets/img/sales/ilyas.jpg" alt="Sales 2" />
                            <h5>Pak Ilyas</h5>
                            <div class="phone-domain">
                              <div style="padding: 6px 10px">
                                  <img src="/assets/img/whatsapp.png" alt="" style="margin-right: 5px; height: 30px; width: 30px" /><span class="" style="float: left; background-color: #25d366"></span>
                                  <a target="_blank" href="https://api.whatsapp.com/send?phone=6281254693810&amp;text=Halo Pak Ilyas, Saya dapat nomor dari www.ciptajayalestari.id" class="nobor" style="font-size: 18px">
                                      <span class="hidden-md-down" style="color: #25d366">Chat Now</span></a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="/assets/img/sales/sales3.jpg" alt="Sales 3" />
                            <h5>Pak Rochman</h5>
                            <div class="phone-domain">
                              <div style="padding: 6px 10px">
                                  <img src="/assets/img/whatsapp.png" alt="" style="margin-right: 5px; height: 30px; width: 30px" /><span class="" style="float: left; background-color: #25d366"></span>
                                  <a target="_blank" href="https://api.whatsapp.com/send?phone=6281331637497&amp;text=Halo Pak Rochman, Saya dapat nomor dari www.ciptajayalestari.id" class="nobor" style="font-size: 18px">
                                      <span class="hidden-md-down" style="color: #25d366">Chat Now</span></a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="/assets/img/sales/sales4.jpg" alt="Sales 4" />
                            <h5>Pak Dwi</h5>
                            <div class="phone-domain">
                              <div style="padding: 6px 10px">
                                  <img src="/assets/img/whatsapp.png" alt="" style="margin-right: 5px; height: 30px; width: 30px" /><span class="" style="float: left; background-color: #25d366"></span>
                                  <a target="_blank" href="https://api.whatsapp.com/send?phone=6285232777499&amp;text=Halo Pak Dwi, Saya dapat nomor dari www.ciptajayalestari.id" class="nobor" style="font-size: 18px">
                                      <span class="hidden-md-down" style="color: #25d366">Chat Now</span></a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<?= $this->endSection(); ?>