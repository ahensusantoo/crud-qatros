<?php $this->load->view('layout/header'); ?>

<div class="container-fluid">
	<div class="row justify-content-center mt-5">
		<div class="col-md-5 ">
			<div class="card">
				<div class="card-header bg-primary text-white text-center">
					Konfirmasi Pembayaran
				</div>
				<div class="card-body">
					
					<form action="" method="post">
						<div class="form-group">
							<label for="kode_boking">Kode Boking</label>
							<input type="text" id="kode_boking" name="kode_boking" class="form-control">
						</div>
						<button type="submit" class="btn btn-success btn-flat float-right">
							<i class="fa fa-search"></i> check kode booking
						</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('layout/footer'); ?>