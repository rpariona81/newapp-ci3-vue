<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Dec 2023 05:39:44 GMT -->

<head>
	<meta charset="utf-8" />
	<title><?= (getenv('APP_NAME') !== null) ? getenv('APP_NAME') : 'Modo prueba' ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Responsive bootstrap 4 admin template" name="description" />
	<meta content="Coderthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">

	<!-- App css -->
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css" integrity="sha384-qF/QmIAj5ZaYFAeQcrQ6bfVMAh4zZlrGwTPY7T/M+iTTLJqJBJjwwnsE5Y0mV7QK" crossorigin="anonymous"> -->
	<link href="<?= base_url('assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/css/apphorizontal.min.css') ?>" rel="stylesheet" type="text/css" id="app-stylesheet" />
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/simplex/bootstrap.min.css"
        integrity="sha384-FYrl2Nk72fpV6+l3Bymt1zZhnQFK75ipDqPXK0sOR0f/zeOSZ45/tKlsKucQyjSp" crossorigin="anonymous">-->
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css" integrity="sha384-qF/QmIAj5ZaYFAeQcrQ6bfVMAh4zZlrGwTPY7T/M+iTTLJqJBJjwwnsE5Y0mV7QK" crossorigin="anonymous">-->
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css" integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">-->

	<!--<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>-->

	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	
	<style>
		body {
			font-family: "Lato", sans-serif;
		}

		.main-head {
			height: 150px;
			background: #FFF;

		}

		.sidenav {
			height: 100%;
			background-color: #1199EF;
			/** #1199EF */
			overflow-x: hidden;
			padding-top: 20px;
			text-align: right;
		}


		.main {
			padding: 0px 10px;
		}

		@media screen and (max-height: 450px) {
			.sidenav {
				padding-top: 15px;
			}
		}

		@media screen and (max-width: 450px) {
			.login-form {
				margin-top: 10%;
			}

			.register-form {
				margin-top: 10%;
			}
		}

		@media screen and (min-width: 768px) {
			.main {
				margin-left: 50%;
			}

			.sidenav {
				width: 50%;
				position: fixed;
				z-index: 1;
				top: 0;
				left: 0;
			}

			.login-form {
				margin-top: 40%;
			}

			.register-form {
				margin-top: 10%;
			}
		}

		.login-main-text {
			margin-top: 4%;
			padding: 60px;
			color: #fff;
		}

		.login-main-text h2 {
			font-weight: bolder;
			color: #fff;
		}

		.btn-black {
			background-color: #000 !important;
			color: #fff;
			font-weight: bolder;
		}
	</style>

	<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
	<!------ Include the above in your HEAD tag ---------->

</head>

<body>

	<div class="sidenav mb-5 mt-0">
		<div class="login-main-text">
			<h1 class="text-white"><?= (getenv('APP_NAME') !== null) ? getenv('APP_NAME') : 'Modo prueba' ?><h1>
					<hr>
					<h4 class="text-white">PANEL DE ACCESO</h4>
					<!-- <p>Ingrese o registrese desde aquí.</p> -->
		</div>
	</div>
	<div class="main mt-3">
		<div class="col-md-8 col-sm-12">
			<div class="login-form">
				<!--< ?= my_validation_errors(validation_errors()); ?>-->

				<?= form_open('auth', array('id' => 'auth', 'name' => 'auth')) ?>
				<div class="form-group">
					<!--<label>Usuario</label>-->
					<?= form_label('Usuario', 'username', array('class' => 'control-label')); ?>

					<input type="text" name="username" id="username" class="form-control" placeholder="Usuario" required>
					<!--< ?= form_error('username',"<div style='color:red'>","</div>");?>       	-->

				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<!--<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>-->
					<?= form_input(array('type' => 'password', 'name' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Contraseña', 'required')) ?>
					<?= form_error('password', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>', '</strong></div>'); ?>


				</div>
				<p><?= my_error($this->session->flashdata('error')) ?></p>
				<button type="submit" class="btn btn-black btn-block"> <i class="mdi mdi-login-variant" style="font-size:1.4em; color: white;"></i>&nbsp;Ingresar</button>
				<!--<button type="submit" class="btn btn-warning">Register</button>-->
				<?= form_close() ?>
				<br>
				<a type="button" class="btn btn-warning btn-block" href="<?= base_url('/') ?>"><i class="fa fa-undo" aria-hidden="true"></i>
					Volver</a>

			</div>
		</div>

	</div>
	<!-- JQuery Validate js -->
	<script src="<?= base_url('assets/libs/jquery-validation/jquery.validate.min.js') ?>"></script>

	<!-- Vendor js -->
	<script src="<?= base_url('assets/js/vendor.min.js') ?>"></script>

	<!-- App js -->
	<script src="<?= base_url('assets/js/app.min.js') ?>"></script>

</body>

</html>
