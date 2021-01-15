<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>fontawesome/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/');?>css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
	<div class="login-logo">
		<a href="#"><b>MAN 7 YOGYAKARTA</b></a>
	</div>
	<div class="card">
		<div class="card-body register-card-body">
			<p class="login-box-msg">Register a new membership</p>

			<form action="<?= base_url('Register/registration'); ?>" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Username" name="name">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="email" class="form-control" placeholder="Email" name="email">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" class="form-control" placeholder="Password" name="password1">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" class="form-control" placeholder="Retype password" name="password2">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- /.col -->
					<div class="col-4 ml-auto">
						<button type="submit" class="btn btn-primary btn-block">Register</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
			<a href="<?= base_url('Login'); ?>" class="text-center">I already have a membership</a>
		</div>
	</div>
</div>
</div>

<!-- jQuery -->
<script src="<?= base_url('assets/');?>js/jquery-3.3.1.slim.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/');?>js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/');?>js/adminlte.min.js"></script>
</body>
</html>