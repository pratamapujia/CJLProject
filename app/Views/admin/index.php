<?= $this->extend('admin/layouts/default'); ?>

<?= $this->section('title'); ?>
<title>Beranda</title>
<?= $this->endSection(); ?>

<?= $this->section('main'); ?>


<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">Ini Halaman dashboard</p>
      </div>
      <!-- <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar</li>
            </ol>
          </nav>
        </div> -->
    </div>
  </div>
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Example Content</h4>
      </div>
      <div class="card-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis laudantium tempore
        exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio reprehenderit
        distinctio incidunt! Vel aspernatur dicta consequatur!
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>