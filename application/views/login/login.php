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
	<?= $this->session->flashdata('message'); ?>
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Sign in to start your session</p>

			<form action="<?= base_url('Login'); ?>" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Username" name="name">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" class="form-control" placeholder="Password" name="password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- /.col -->
					<div class="col-4 ml-auto">
						<button type="submit" class="btn btn-primary btn-block">Sign In</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
			<p class="mb-1">
				<a href="forgot-password.html">I forgot my password</a>
			</p>
			<p class="mb-0">
				<a href="<?= base_url('Register'); ?>" class="text-center">Register a new membership</a>
			</p>
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