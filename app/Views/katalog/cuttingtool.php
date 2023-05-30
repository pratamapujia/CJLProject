<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>Cutting Tools | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>

<style>
  .container-fluid {
    max-width: 1200px
  }

  .card {
    background: #fff;
    box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
    transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
    border: 0;
    border-radius: 1rem
  }

  .card-img,
  .card-img-top {
    border-top-left-radius: calc(1rem - 1px);
    border-top-right-radius: calc(1rem - 1px)
  }

  .card h5 {
    overflow: hidden;
    height: 56px;
    font-weight: 900;
    font-size: 1rem
  }

  .card-img-top {
    width: 100%;
    max-height: 180px;
    object-fit: cover;
  }

  .card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06)
  }

  .label-top {
    position: absolute;
    background-color: rgb(255, 255, 255);
    color: #fff;
    top: 8px;
    right: 8px;
    padding: 5px 10px 5px 10px;
    border-radius: 3px;
    width: 100px;
    max-height: 50px;
    object-fit: contain;
  }

  .label-top img {
    width: 100%;
    max-height: 30px;
    padding-bottom: 3px;
  }

  @media (max-width: 768px) {
    .card-img-top {
      max-height: 250px
    }
  }

  .over-bg {
    background: rgba(53, 53, 53, 0.85);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(0.0px);
    -webkit-backdrop-filter: blur(0.0px);
    border-radius: 10px
  }

  .btn {
    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    padding: 5px 50px 5px 50px
  }

  .box .btn {
    font-size: 1.5rem
  }

  @media (max-width: 1025px) {
    .btn {
      padding: 5px 40px 5px 40px
    }
  }

  @media (max-width: 250px) {
    .btn {
      padding: 5px 30px 5px 30px
    }
  }
</style>

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="<?= site_url('home'); ?>">Home</a></li>
        <li>Cutting Tools</li>
      </ol>
    </div>
  </section><!-- End Breadcrumbs -->

  <section class="p-5 container-fluid" style="position:relative;">
    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-3 row-cols-lg-4 g-3">
      <?php foreach ($barang as $key => $value) : ?>
        <div class="col mb-4">
          <div class="card h-100 shadow-sm">
            <img src="<?= base_url(); ?>/assets/img/barang/<?= $value->gambar_barang; ?>" class="card-img-top" alt="G.Barang">
            <div class="label-top shadow-sm">
              <img src="<?= base_url(); ?>/assets/img/logo/<?= $value->gambar_merk; ?>" alt="Merek">
            </div>
            <div class="card-body">
              <h5 class="card-title">
                <?= $value->nama_barang; ?>
              </h5>
              <div class="d-grid gap-2 my-4">
                <a href="<?= site_url('katalog/detail/' . $value->id_barang); ?>" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?= $pager->links('default', 'pagination') ?>
  </section>
</main>

<?= $this->endSection(); ?>