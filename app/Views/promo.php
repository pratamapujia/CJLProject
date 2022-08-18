<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>CIPTA JAYA LESTARI</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>
    <div class="container-fluid">
      <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/img/Banner/promo.jpg" class="d-block w-100" alt="Gambar 1" />
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <h2>Promo Bulan ini</h2>
        </div>    
      </div>
      <div class="row justify-content-center" style="padding-bottom: 10px;">
          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/assets/img/Logo/weida.png" class="card-img-top" alt="WEIDA" />       
          </div>

          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/assets/img/Logo/dixon.jpg" class="card-img-top" alt="DIXON" />
          </div>

          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/assets/img/Logo/fullmark.jpg" class="card-img-top" alt="FULLMARK" />
          </div>

          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/assets/img/Logo/bositools.png" class="card-img-top" alt="BOSI TOOLS" />
          </div>
      </div>
      <div class="row justify-content-center" style="padding-bottom: 10px;">
          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/assets/img/Logo/J&W.jpg" class="card-img-top" alt="J&W" />       
          </div>

          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/assets/img/Logo/Mitutoyo.png" class="card-img-top" alt="Mitutoyo" />
          </div>

          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/assets/img/Logo/NACHI.jpg" class="card-img-top" alt="NACHI" />
          </div>

          <div class="card col-md-3" style="width: 20rem; padding: 10px">
              <img src="/assets/img/Logo/fullmark.jpg" class="card-img-top" alt="Fullmark" />
          </div>
      </div>
    </div>
<?= $this->endSection(); ?>