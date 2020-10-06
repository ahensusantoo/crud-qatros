<?php $this->load->view('admin/layout/header'); ?>

	<div class="container-fluid my-5">
		<div class="row">
			<div class="col-md-8">
				<?php $this->view('message') ?>
				<div class="card">
					<div class="card-header text-center bg-primary text-white">
						Daftar Stasiun
					</div>
					<div class="card-body">
						<table class="table table-bodered table-hover">
							<thead>
								<tr>
									<th>NO</th>
									<th>Nama Stasiun</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($stasiun as $key => $st): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $st->nama_stasiun ?></td>
										<td>
											<a class="btn btn-success btn-sm btn-flat">
												<i class="fa fa-pencil-alt"></i> Update
											</a>
											<a href="<?=site_url('admin/home/delete_stasiun/'.$st->stasiun_id) ?>" class="btn btn-danger btn-flat btn-sm">
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
				<?php $this->view('message') ?>
				<form action="<?php echo site_url('admin/home/add_stasiun') ?>" method="post">
					<div class="card-header text-center bg-primary text-white">
						Tambah Stasiun
					</div>
					<div class="form-group">
						<label for="nama_stasiun">Nama Stasiun</label>
						<input type="text" name="nama_stasiun" id="nama_stasiun" class="form-control" value="<?=set_value('nama_stasiun')?>" placeholder="Nama Stasiun">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block">
							<i class="fa fa-plus"></i>Tambah Stasiun
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php $this->load->view('admin/layout/footer'); ?>