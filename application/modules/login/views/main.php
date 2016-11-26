<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title></title>

	<?php 
		$this->load->view('common_modules/script');
	?>

	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/AdminLTE.min.css') ?> ">
	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/skins/_all-skins.min.css') ?> ">

</head>
<body class="hold-transition login-page">

	<div class="login-box">
		<div class="login-logo">
			<a href="../../index2.html">
				<img src=" <?php echo base_url('assets/img/ppij-logo.svg') ?> 	">
			</a>
			<h2>Persatuan Pelajar Indonesia</h2>
			<h3>Jepang</h3>
		</div><!-- /.login-logo -->

		<div class="login-box-body">

			<p class="login-box-msg">Login Admin</p>

			<form action="<?php echo base_url('index.php/login/do_login') ?>" method="post">
				<div class="form-group has-feedback">
					<input name="identity" type="email" class="form-control" placeholder="Email">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input name="password" type="password" class="form-control" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<div class="checkbox icheck">
						
					</div>
					</div><!-- /.col -->
						<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
					</div><!-- /.col -->
				</div>
	        </form>

		</div>

	</div>

	

</body>
</html>