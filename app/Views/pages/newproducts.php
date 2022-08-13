<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container-fluid">
      <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/Banner/newproducts.jpg" class="d-block w-100" alt="Gambar 1" />
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <h2>Produk terbaru kami</h2>
        </div>    
      </div>
      <div class="row justify-content-center" style="padding-bottom: 10px;">
          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/img/Logo/weida.png" class="card-img-top" alt="WEIDA" />       
          </div>

          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/img/Logo/dixon.jpg" class="card-img-top" alt="DIXON" />
          </div>

          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/img/Logo/fullmark.jpg" class="card-img-top" alt="FULLMARK" />
          </div>

          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/img/Logo/bosi tools.png" class="card-img-top" alt="BOSI TOOLS" />
          </div>
      </div>
      <div class="row justify-content-center" style="padding-bottom: 10px;">
          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/img/Logo/J&W.jpg" class="card-img-top" alt="J&W" />       
          </div>

          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/img/Logo/Mitutoyo.png" class="card-img-top" alt="Mitutoyo" />
          </div>

          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/img/Logo/NACHI.jpg" class="card-img-top" alt="NACHI" />
          </div>

          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/img/Logo/fullmark.jpg" class="card-img-top" alt="Fullmark" />
          </div>
      </div>
    </div>
<?= $this->endSection(); ?>