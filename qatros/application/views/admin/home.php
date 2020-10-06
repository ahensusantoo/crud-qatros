<?php $this->load->view('admin/layout/header'); ?>

	<div class="container-fluid my-5">
		<div class="row">
			<div class="col-md-8">
				<?php $this->view('message') ?>
				<div class="card">
					<div class="card-header text-center bg-primary text-white">
						Daftar Item
					</div>
					<div class="card-body">
						<table class="table table-bodered table-hover">
							<thead>
								<tr>
									<th>NO</th>
									<th>Kode Item</th>
									<th>Nama Item</th>
									<th>Description</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($item as $key => $st): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $st->kode_item ?></td>
										<td><?= $st->nama_item ?></td>
										<td><?= $st->deskripsi ?></td>
										<td>
											<a href="<?=site_url('admin/home/update/'.$st->item_id) ?>" class="btn btn-success btn-sm btn-flat">
												<i class="fa fa-pencil-alt"></i> Update
											</a>
											<a href="<?=site_url('admin/home/delete/'.$st->item_id) ?>" class="btn btn-danger btn-flat btn-sm">
												<i class="fa fa-trash-alt"></i> Delete
											</a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>		
					</div>	
				</div>
			</div>
			<div class="col-md-4">
				<?php //$this->view('message') ?>
				<form action="<?php echo site_url('admin/home/add') ?>" method="post">
					<div class="card-header text-center bg-primary text-white">
						Tambah Item
					</div>
					<div class="form-group">
						<label for="nama_item">Nama Item</label>
						<input type="text" name="nama_item" id="nama_item" class="form-control" value="<?=set_value('nama_item')?>" placeholder="Nama Item">
					</div>
					<div class="form-group">
						<label for="deskripsi">Deskripsi</label>
						<input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?=set_value('deskripsi')?>" placeholder="Deskripsi">
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-success btn-block">
							<i class="fa fa-plus"></i>Tambah Stasiun
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php $this->load->view('admin/layout/footer'); ?>