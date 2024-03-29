<?= $this->extend('admin/layouts/default'); ?>

<?= $this->section('title'); ?>
<title>Data Barang | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('main'); ?>


<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-md-12 order-md-1 order-last">
        <h3>Data Barang yang dihapus Sementara</h3>
        <p class="text-subtitle">Halaman ini berisikan data - data Barang yang telah dihapus sebelumnya. <br> Admin bisa <b class="text-danger">Merestore</b> data Barang dan <b class="text-danger">Menghapus</b> data Barang secara <b class="text-danger">Permanen.</b></p>
      </div>
    </div>
  </div>


  <section class="section">
    <!-- Alert -->
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <div class="card">
      <div class="card-header">
        <div class="card-header">
          <a href="<?= site_url('barang'); ?>" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
          <div class="float-end">
            <a href="<?= site_url('barang/restore'); ?>" class="btn btn-success"><i class="bi bi-recycle"></i> Restore All</a>
            <form action="<?= site_url('/barang/hapus/'); ?>" method="POST" class="d-inline" onsubmit="return confirm('Data ini akan dihapus secara permanen! Apa anda yakin?')">
              <?= csrf_field(); ?>
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-danger"><i class="bi bi-trash3"></i> Delete All Permanent</button>
            </form>
          </div>
        </div>
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
                  <a href="<?= site_url('/barang/restore/' . $value->id_barang); ?>" class="btn btn-success btn-sm"><i class="bi bi-recycle"></i> Restore</a>
                  <form action="<?= site_url('/barang/hapus/' . $value->id_barang); ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="button" class="btn btn-danger btn-sm btn-delete2"><i class="bi bi-trash"></i> Hapus Permanen</button>
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