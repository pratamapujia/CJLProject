<?= $this->extend('admin/layouts/default'); ?>

<?= $this->section('title'); ?>
<title>Data Sales | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('main'); ?>


<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Data Sales yang dihapus Sementara</h3>
        <p class="text-subtitle">Halaman ini berisikan data - data Sales yang telah dihapus sebelumnya. <br> Admin bisa <b class="text-danger">Merestore</b> data sales dan <b class="text-danger">Menghapus</b> data sales secara <b class="text-danger">Permanen.</b></p>
      </div>
    </div>
  </div>


  <section class="section">
    <!-- Alert -->
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="card">
      <div class="card-header">
        <a href="<?= site_url('sales'); ?>" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
        <div class="float-end">
          <a href="<?= site_url('sales/restore'); ?>" class="btn btn-success"><i class="bi bi-recycle"></i> Restore All</a>
          <form action="<?= site_url('/sales/hapus/'); ?>" method="POST" class="d-inline" onsubmit="return confirm('Data ini akan dihapus secara permanen! Apa anda yakin?')">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger"><i class="bi bi-trash3"></i> Delete All Permanent</button>
          </form>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped" id="table1">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Telepon</th>
              <th>Alamat</th>
              <th>Tanggal Lahir</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($sales as $key => $value) : ?>
              <tr>
                <td><?= $key + 1; ?></td>
                <td><?= $value->nama_sales; ?></td>
                <td><?= $value->phone_sales; ?></td>
                <td><?= $value->alamat_sales; ?></td>
                <td><?= $value->tgl_lahir_sales; ?></td>
                <td>
                  <a href="<?= site_url('/sales/restore/' . $value->id_sales); ?>" class="btn btn-success btn-sm"><i class="bi bi-recycle"></i> Restore</a>
                  <form action="<?= site_url('/sales/hapus/' . $value->id_sales); ?>" method="POST" class="d-inline" onsubmit="return confirm('Data ini akan dihapus secara permanen! Apa anda yakin?')">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus Permanen</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

  </section>
</div>

<?= $this->endSection(); ?>