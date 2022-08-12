<?= $this->extend('admin/layouts/default'); ?>

<?= $this->section('title'); ?>
<title>Data Merk | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('main'); ?>


<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-md-12 order-md-1 order-last">
        <h3>Data Merk</h3>
        <p class="text-subtitle">Halaman ini berisikan data - data Merk. <br> Admin bisa <b class="text-danger">Menambah</b> data Merk, <b class="text-danger">Mengubah</b> data, dan <b class="text-danger">Menghapus</b> data.</p>
      </div>
    </div>
  </div>


  <section class="section">
    <!-- Alert -->
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="card">
      <div class="card-header">
        <a href="<?= site_url('merk/new'); ?>" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Data</a>
        <a href="<?= site_url('merk/trash'); ?>" class="btn btn-danger float-end" data-bs-toggle="tooltip" data-bs-placement="left" title="Trash"><i class="bi bi-trash3"></i></a>
      </div>
      <div class="card-body">
        <table class="table table-striped" id="table1">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Merk</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($merk as $key => $value) : ?>
              <tr>
                <td><?= $key + 1; ?></td>
                <td><?= $value->nama_merk; ?></td>
                <td>
                  <img src="<?= base_url() ?>/assets/img/logo/<?= $value->gambar_merk; ?>" alt="Logo" width="80px">
                </td>
                <td>
                  <a href="<?= site_url('merk/' . $value->id_merk . '/edit'); ?>" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Data"><i class="bi bi-pencil-square"></i></a>
                  <form action="<?= site_url('merk/' . $value->id_merk); ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data"><i class="bi bi-trash"></i></button>
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