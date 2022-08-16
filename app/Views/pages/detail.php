<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="ads-grid_shop">
	<div class="shop_inner_inf">
		<div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<div class="clearfix"></div>
					<ul class="slides" style="width: 2000%; transition-duration: 0.6s; transform: translate3d(-3331.2px, 0px, 0px);">
						<li data-thumb="<?= base_url('/assets/img/barang/' . kategori_help($detail['nama_kategori']) . '/' . $detail['gambar']) ?>" class="clone" aria-hidden="true" style="width: 416.4px; float: left; display: block;">
							<div class="thumb-image"> <img src="<?= base_url('assets/img/barang/' . kategori_help($detail['nama_kategori']) . '/' . $detail['gambar']) ?>" data-imagezoom="true" class="img-responsive" draggable="false"></div>
						</li>
					</ul>
					<ul class="flex-direction-nav">
						<li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
						<li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
			<h3><?= $detail['nama_barang'] ?></h3>
			<div class="elementor-widget-button">
				<a id="linkwa" href="https://wa.me/6281254693810?text=Apakah+stok+dengan+nama+produk+%2A<?= $detail['nama_barang'] ?>%2A+tersedia+%3F" target="blank" class="elementor-button elementor-size-sm" role="button">
					<i class="fa fa-whatsapp bold" aria-hidden="true"></i>
					<span>Penawaran</span>
				</a>
			</div>
			<input type="hidden" name="cek_style" id="cek-style" value="">
			<input type="hidden" name="cek_jns" id="cek-jns-stok" value="0">
			<input type="hidden" name="status_fav" id="cek-status-fav" value="1">
			<input type="hidden" name="cek_warna" id="cek-warna" value="">
			<input type="hidden" name="usr_fav" id="cek-user" value="">
			<input type="hidden" name="jns_mbr" id="cek-jns-mbr" value="">
			</a>
		</div>
		    <div class="clearfix"></div>
            <div class="responsive_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Deskripsi</li>

				</ul>

			</div>

			<div class="resp-tabs-container">
				<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Deskripsi</h2>
				<div class="tab1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">

					<div class="single_page">
						<p> <?= $detail['deskripsi']  ?> </p>


					</div>
				</div>

			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<?= $this->endSection(); ?>