<!DOCTYPE html>
	<html>
		<head>
			<title><?php echo $title ?></title>
			<link rel="stylesheet" href="<?=base_url('assets') ?>/css/bootstrap.min.css">
			<!-- <link rel="stylesheet" href="<?=base_url('assets') ?>/font-awesome/css/font-awesome.min.css" /> -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	</head>
	<body>
		<?php $this->view('message') ?>
		<div class="container-fluid">
			<div class="row justify-content-center mt-5">
				<div class="col-md-4 ">
					<div class="card">
						<div class="card-header bg-primary text-white text-center">
							Halaman Login
						</div>
					<div class="card-body">

						<form action="<?= site_url('auth/process') ?>" method="post">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" id="username" name="username" class="form-control" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" id="password" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group float-right">
								<button type="submit" name="login" class="btn btn-success btn-flat">
									<i class="fa fa-sign-in-alt"></i> Login
								</button>
								<a class="btn btn-primary" href="<?php echo base_url() ?>">
									<i class="fa fa-undo"></i>Ke Home
								</a>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?=base_url('assets') ?>/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
	</body>
</html>