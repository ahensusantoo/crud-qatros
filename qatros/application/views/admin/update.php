<?php $this->load->view('admin/layout/header'); ?>

	<div class="container-fluid my-5">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<?php $this->view('message') ?>
				<?php foreach ($item as $key => $st) { ?>
				<form action="<?php echo site_url('admin/home/proces/'.$st->item_id) ?>" method="post">
					<div class="card-header text-center bg-primary text-white">
						Tambah Item
					</div>
					<div class="form-group">
						<input type="hidden" name="id" value="<?= $st->item_id ?>">
						<label for="kode_item">Kode Item</label>
						<input type="text" name="kode_item" id="kode_item" class="form-control" value="<?= $st->kode_item?>" readonly>
					</div>

					<div class="form-group">
						<label for="nama_item">Nama Item</label>
						<input type="text" name="nama_item" id="nama_item" class="form-control" value="<?= $st->nama_item?>" placeholder="Nama Item">
					</div>
					<div class="form-group">
						<label for="deskripsi">Deskripsi</label>
						<input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?= $st->deskripsi ?>" placeholder="Deskripsi">
					</div>
					<div class="form-group">
						<button type="submit" name="submit" id="submit" class="btn btn-success btn-block">
							<i class="fa fa-pencil"></i>Update Stasiun
						</button>
					</div>
				</form>
			<?php } ?>
			</div>
		</div>
	</div>

<?php $this->load->view('admin/layout/footer'); ?>