<?= $this->extend('admin/layouts/default'); ?>

<?= $this->section('title'); ?>
<title>Edit Data Barang | CJL</title>
<?= $this->endSection(); ?>

<?= $this->section('main'); ?>


<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Form Edit Data</h3>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <div class="float-start float-lg-end">
          <a href="<?= site_url('barang'); ?>" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
        </div>
      </div>
    </div>
  </div>
  <?php $errors = session()->getFlashdata('errors') ?>
  <section class="section mt-2">
    <div class="card">
      <div class="card-body">
        <?php $validation = \Config\Services::validation(); ?>
        <form action="<?= site_url('barang/' . $barang->id_barang); ?>" class="form" method="POST" autocomplete="off" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PATCH">
          <input type="hidden" name="gambar_lama" value="<?= $barang->gambar_barang; ?>">
          <div class="row">
            <?= csrf_field(); ?>
            <div class="col-md-6 col-12">
              <div class="row">
                <div class="col-md-12 col-12">
                  <div class="form-group">
                    <label class="form-label">Nama Barang <strong class="text-danger">*</strong></label>
                    <input type="text" class="form-control <?= $validation->hasError('nama_barang') ? 'is-invalid' : null ?>" name="nama_barang" value="<?= old('nama_barang', $barang->nama_barang); ?>">
                    <div class="invalid-feedback">
                      <?= $validation->getError('nama_barang'); ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-12">
                  <div class="form-group">
                    <label class="form-label">Merek Barang <strong class="text-danger">*</strong></label>
                    <select name="id_merk" class=" form-select <?= $validation->hasError('id_merk') ? 'is-invalid' : null ?>">
                      <option value="" hidden> Pilih Merek</option>
                      <?php foreach ($merk as $key => $value) : ?>
                        <option value="<?= $value->id_merk; ?>" <?= old('id_merk', $barang->id_merk) == $value->id_merk ? 'selected' : null; ?>><?= $value->nama_merk; ?></option>
                      <?php endforeach ?>
                    </select>
                    <div class="invalid-feedback">
                      <?= $validation->getError('id_merk'); ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-12">
                  <div class="form-group">
                    <label class="form-label">Kategori Barang <strong class="text-danger">*</strong></label>
                    <select name="id_kategori" class=" form-select <?= $validation->hasError('id_kategori') ? 'is-invalid' : null ?>">
                      <option value="" hidden> Pilih Kategori</option>
                      <?php foreach ($kategori as $key => $value) : ?>
                        <option value="<?= $value->id_kategori; ?>" <?= old('id_kategori', $barang->id_kategori) == $value->id_kategori ? 'selected' : null; ?>><?= $value->nama_kategori; ?></option>
                      <?php endforeach ?>
                    </select>
                    <div class="invalid-feedback">
                      <?= $validation->getError('id_kategori'); ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-12">
                  <div class="form-group">
                    <label class="form-label">Gambar Barang <strong class="text-danger">*</strong></label>
                    <input type="file" class="form-control <?= $validation->hasError('gambar_barang') ? 'is-invalid' : null ?>" name="gambar_barang" id="gambar" onchange="previewImg()">
                    <div class="invalid-feedback">
                      <?= $validation->getError('gambar_barang'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="row">
                <div class="col-md-12 col-12">
                  <div class="form-group">
                    <label class="form-label">Deskripsi Barang</label>
                    <textarea name="desk_barang" class="form-control"><?= $barang->desk_barang; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <img src="<?= base_url(); ?>/assets/img/barang/<?= $barang->gambar_barang; ?>" class="img-thumbnail img-preview" alt="Logo">
                </div>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-start">
              <button type="reset" class="btn btn-light-secondary mb-1">Reset</button>
              <button type="submit" class="btn btn-primary ms-2 mb-1"><i class="bi bi-send"></i> Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </section>
</div>

<?= $this->endSection(); ?>