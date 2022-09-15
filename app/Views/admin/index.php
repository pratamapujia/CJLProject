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
      </div>
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
<div class="page content">
  <section class="row">
    <div class="col-6 col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body px-4 py-4-5">
          <div class="row">
            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
              <div class="stats-icon purple mb-2">
                <i class="bi bi-person-fill"></i>
              </div>
            </div>
            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
              <h6 class="text-muted font-semibold">Profile Views</h6>
              <h6 class="font-extrabold mb-0">112.000</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>