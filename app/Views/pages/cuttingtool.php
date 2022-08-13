<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
      <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/Banner/cuttingtool.jpg" class="d-block w-100" alt="Gambar 1" />
          </div>
        </div>
      </div>
</div>
<?= $this->endSection(); ?>