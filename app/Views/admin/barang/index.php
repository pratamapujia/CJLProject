<?= $this->extend('admin/layouts/default'); ?>

<?= $this->section('title'); ?>
<title>Data Barang | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('main'); ?>


<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-md-12 order-md-1 order-last">
        <h3>Data Barang</h3>
        <p class="text-subtitle">Halaman ini berisikan data - data Barang. <br> Admin bisa <b class="text-danger">Menambah</b> data Barang, <b class="text-danger">Mengubah</b> data, dan <b class="text-danger">Menghapus</b> data.</p>
      </div>
    </div>
  </div>


  <section class="section">
    <!-- Alert -->
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="card">
      <div class="card-header">
        <a href="<?= site_url('barang/new'); ?>" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Data</a>
        <!-- <a href="</?= site_url('barang/trash'); ?>" class="btn btn-danger float-end" data-bs-toggle="tooltip" data-bs-placement="left" title="Trash"><i class="bi bi-trash3"></i></a> -->
      </div>
      <div class="card-body">
        <table class="table table-striped" id="table1">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama barang</th>
              <th>Gambar</th>
              <th>Deskripsi</th>
              <th>Merk</th>
              <th>Kategori</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($barang as $key => $value) : ?>
              <tr>
                <td><?= $key + 1; ?></td>
                <td><?= $value->nama_barang; ?></td>
                <td>
                  <img src="<?= base_url() ?>/assets/img/barang/<?= $value->gambar_barang; ?>" alt="Logo" width="80px">
                </td>
                <td><?= $value->desk_barang; ?></td>
                <td>
                  <img src="<?= base_url() ?>/assets/img/logo/<?= $value->gambar_merk; ?>" alt="Logo" width="80px">
                </td>
                <td><?= $value->nama_kategori; ?></td>
                <td>
                  <a href="<?= site_url('barang/' . $value->id_barang . '/edit'); ?>" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Data"><i class="bi bi-pencil-square"></i></a>
                  <form action="<?= site_url('barang/' . $value->id_barang); ?>" method="POST" class="d-inline" onsubmit="return confirm('Data ini akan dihapus secara permanen! Apa anda yakin?')">
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