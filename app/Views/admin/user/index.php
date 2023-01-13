<?= $this->extend('admin/layouts/default'); ?>

<?= $this->section('title'); ?>
<title>Data Admin | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('main'); ?>


<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Data Admin</h3>
        <p class="text-subtitle">Halaman ini berisikan data - data Admin yang aktif. <br> Admin bisa <b class="text-danger">Menambah</b> data user, <b class="text-danger">Mengubah</b> data, dan <b class="text-danger">Menghapus</b> data.</p>
      </div>
    </div>
  </div>


  <section class="section">
    <!-- Alert -->
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="card">
      <div class="card-header">
        <a href="<?= site_url('users/new'); ?>" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Data</a>
        <a href="<?= site_url('users/trash'); ?>" class="btn btn-danger float-end" data-bs-toggle="tooltip" data-bs-placement="left" title="Trash"><i class="bi bi-trash3"></i></a>
      </div>
      <div class="card-body">
        <table class="table table-striped" id="table1">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>E-mail</th>
              <th>Username</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $key => $value) : ?>
              <tr>
                <td><?= $key + 1; ?></td>
                <td><?= $value->nama_admin; ?></td>
                <td><?= $value->email; ?></td>
                <td><?= $value->username; ?></td>
                <td>
                  <a href="<?= site_url('users/' . $value->id_admin . '/edit'); ?>" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Data"><i class="bi bi-pencil-square"></i></a>
                  <form action="<?= site_url('users/' . $value->id_admin); ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="button" class="btn btn-danger btn-sm btn-delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data"><i class="bi bi-trash"></i></button>
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