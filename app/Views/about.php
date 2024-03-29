<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>CIPTA JAYA LESTARI</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>

<div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>

<!-- ======= Carousel Section ======= -->
<div class="container-fluid">
  <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/assets/img/about1.jpg" class="d-block w-100" alt="Gambar 1" />
      </div>
      <div class="carousel-item">
        <img src="/assets/img/about2.jpg" class="d-block w-100" alt="Gambar 2" />
      </div>
      <div class="carousel-item">
        <img src="/assets/img/about3.jpg" class="d-block w-100" alt="Gambar 3" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlide" data-bs-slide="prev">
      <i class="bi bi-chevron-left" style="color: #067fe2" aria-hidden="true"></i>

    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselSlide" data-bs-slide="next">
      <i class="bi bi-chevron-right" style="color: #067fe2" aria-hidden="true"></i>

    </button>
  </div>
</div>
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

<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Feedback</h2>
      <p>Send us feedback to give more information.</p>
    </div>

    <div class="row">

      <div class="col-md-6 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <form action="<?= site_url('email'); ?>" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

      <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.946223979288!2d112.76779981070506!3d-7.2469608927293105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f998e9faaaab%3A0x5a12e7e7c8ce4369!2sCV.%20CIPTA%20JAYA%20LESTARI!5e0!3m2!1sen!2sid!4v1688643895256!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        

      </div>

    </div>

  </div>
</section><!-- End Contact Us Section -->
<?= $this->endSection(); ?>