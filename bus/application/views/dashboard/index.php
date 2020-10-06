
<?php $this->load->view('layout/header'); ?>
		<!-- jumbotron -->
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h1 class="display-4">Selamat Datang di Bus X</h1>
		    			<p class="lead">Anda dapat melakukan pemesan tiket Bus online dengan mudah</p>
					</div>

					<div class="col-md-4">
						<form action="" method="post">
							<div class="form-group">
								<label for="stasiun_asal">Terminal Asal</label>
								<select name="" class="form-control">
									<option value="">--PILIH--</option>
									<?php foreach ($tujuan as $key => $value) { ?>
									<option value="<?=$value->stasiun_id ?>"><?=$value->nama_stasiun ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="stasiun_tujuan">Terminal Tujuan</label>
								<select name="" class="form-control">
									<?php foreach ($tujuan as $key => $value) { ?>
									<option value="<?=$value->stasiun_id ?>"><?=$value->nama_stasiun ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label for="tgl_berangkat">Tanggal Berangkat</label>
								<input type="date" name="tgl_berangkat" id="tgl_berangkat" class="form-control">
							</div>

							<div class="form-group">
								<label for="jumlah_penumpang">Jumlah Penumpang</label>
								<select name="" class="form-control">
									<option value="">--PILIH--</option>}
									<option value="">1</option>}
									<option value="">2</option>}
								</select>
							</div>

							<button type="button" class="btn btn-success btn-block"><i class="fa fa-search">Pesan & cari kereta</i></button>
						</form>
					</div>

				</div>
		  	</div>
		</div>
		<!-- end jumbotron -->
<?php $this->load->view('layout/footer'); ?>