<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
      <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url('/assets/img/slider1.jpg'); ?>" class="d-block w-100" alt="Gambar 1" />
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('/assets/img/slider2.jpg'); ?>" class="d-block w-100" alt="Gambar 2" />
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('/assets/img/slider2.jpg'); ?>" class="d-block w-100" alt="Gambar 3" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlide" data-bs-slide="prev">
          <i class="bi bi-chevron-left" style="color: #067fe2" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSlide" data-bs-slide="next">
          <i class="bi bi-chevron-right" style="color: #067fe2" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </button>
      </div>
</div>

<!-- Our Products Carousel -->
<div class="container">
          <div class="row" style="padding-top: 20px;">
            <div class="col-12">
              <div class="row head-panel align-items-center d-flex justify-content-between">
              <div class="col-8 col-md-9 head-panel__left">
                <h2 class="head-panel__title">Our Products</h2>
              </div>
            </div>
            </div> 
          </div>
            <div id="carouselProdukUnggulan" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row justify-content-center" style="padding: 20px;">
                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/logo/weida.png" class="card-img-top" alt="WEIDA">
                    </div>

                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/logo/dixon.jpg" class="card-img-top" alt="DIXON">
                      
                    </div>
              
                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/logo/fullmark.jpg" class="card-img-top" alt="FULLMARK">
                      
                    </div>
                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/logo/bositools.png" class="card-img-top" alt="BOSI TOOLS">
                      
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="row justify-content-center" style="padding: 20px;">
                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/logo/J&W.jpg" class="card-img-top" alt="J&W">
                      
                    </div>

                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/logo/Besdia.jpg" class="card-img-top" alt="Besdia">
                      
                    </div>

                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/logo/Carmar.jpg" class="card-img-top" alt="CarMar">
                      
                    </div>

                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/logo/Arntz.jpg" class="card-img-top" alt="Arntz">
                      
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="row justify-content-center" style="padding: 20px;">
                    <div class="card col-md-3" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/logo/vertex.png" class="card-img-top" alt="VERTEX">
                      
                    </div>

                    <div class="card col-md-3" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/logo/seayac.jpg" class="card-img-top" alt="SEAYAC">
                      
                    </div>

                    <div class="card col-md-3" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/logo/waytrain.jpg" class="card-img-top" alt="WAYTRAIN">
                      
                    </div>

                    <div class="card col-md-3" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/logo/sanou.jpg" class="card-img-top" alt="SAN OU">
                      
                    </div>
                </div>
                </div> 
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselProdukUnggulan" data-bs-slide="prev">
                    <i class="bi bi-chevron-left" style="color: #067fe2;" aria-hidden="true"></i>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselProdukUnggulan" data-bs-slide="next">
                    <i class="bi bi-chevron-right" style="color: #067fe2;" aria-hidden="true"></i>
                  <span class="visually-hidden">Next</span>
              </button>
            </div>                           
</div>

<section class="showcase">
      <div class="container-fluid p-0">
        <div class="row g-0">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/assets/img/gambar1.jpg')"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h3>Machinery</h3>
            <p>Ingin cari macam - macam mesin?</p>
            <div class="shop-button">
              <a href="/pages/mesin">Lihat Disini</a>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('/assets/img/machinetool.jpg')"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h3>Machine Tools Accesories</h3>
            <p>Ingin cari berbagai machine tool?</p>
            <div class="shop-button">
              <a href="/pages/machinetool">Lihat Disini</a>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/assets/img/cuttingtool.jpg')"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h3>Cutting Tools</h3>
            <p>Ingin cari berbagai macam cutting tool?</p>
            <div class="shop-button">
              <a href="/pages/cuttingtool">Lihat Disini</a>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('/assets/img/measuringtool.jpg')"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h3>Measuring Tools</h3>
            <p>Ingin cari berbagai jenis measuring tool?</p>
            <div class="shop-button">
              <a href="/pages/measuringtool">Lihat Disini</a>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/assets/img/handtool.jpg')"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h3>Hand Tools</h3>
            <p>Ingin cari macam - macam hand tool?</p>
            <div class="shop-button">
              <a href="/pages/handtool">Lihat Disini</a>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('/assets/img/cuttingcoolant.jpg')"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h3>Cutting Coolant</h3>
            <p>Ingin cari berbagai jenis cutting coolant?</p>
            <div class="shop-button">
              <a href="/pages/cuttingcoolant">Lihat Disini</a>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/assets/img/abrasive.jpg')"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h3>Abrasive</h3>
            <p>Ingin cari berbagai macam abrasive?</p>
            <div class="shop-button">
              <a href="/pages/abrasive">Lihat Disini</a>
            </div>
          </div>
        </div>
      </div>
    </section>
<?= $this->endSection(); ?>