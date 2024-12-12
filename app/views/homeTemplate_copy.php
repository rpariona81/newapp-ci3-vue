<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Heroic Features - Start Bootstrap Template</title>
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">

	<!-- App css -->
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css" integrity="sha384-JW3PJkbqVWtBhuV/gsuyVVt3m/ecRJjwXC3gCXlTzZZV+zIEEl6AnryAriT7GWYm" crossorigin="anonymous">-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css" integrity="sha384-qF/QmIAj5ZaYFAeQcrQ6bfVMAh4zZlrGwTPY7T/M+iTTLJqJBJjwwnsE5Y0mV7QK" crossorigin="anonymous">
	<link href="<?= base_url('assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/css/apphorizontal.min.css') ?>" rel="stylesheet" type="text/css" id="app-stylesheet" />

	<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</head>

<body>
	<!-- Responsive navbar-->
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary mb-5">
		<div class="container px-lg-5">
			<a class="navbar-brand" href="/">Proceso de optimización y fortalecimiento</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!--<ul class="navbar-nav ms-auto mb-2 mb-lg-0">-->
				<ul class="navbar-nav ml-md-auto">
					<li class="nav-item"><a class="nav-link" aria-current="page" href="<?= base_url('registroatr') ?>">Registro de asistentes &nbsp;|</a></li>
					<li class="nav-item"><a class="nav-link" href="#!">Institutos &nbsp;|</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('/login') ?>">Seguimiento de portales web&nbsp;|</a></li>
				</ul>
			</div>
		</div>
		<div class="login-container">
			<form action="/action_page.php">
				<input type="text" placeholder="Username" name="username">
				<input type="text" placeholder="Password" name="psw">
				<button type="submit">Login</button>
			</form>
		</div>
	</nav>
	<!-- Header-->
	<!-- <header class="py-5 mt-5">
		<div class="container px-lg-5">
			<div class="p-4 p-lg-5 bg-light rounded-3 text-center">
				<div class="m-4 m-lg-5">
					<h1 class="display-5 fw-bold">A warm welcome!</h1>
					<p class="fs-4">Bootstrap utility classes are used to create this jumbotron since the old component has been removed from the framework. Why create custom CSS when you can use utilities?</p>
					<a class="btn btn-info btn-lg" href="#!">Call to action</a>
				</div>
			</div>
		</div>
	</header> -->
	<!-- Page Content-->
	<section class="pt-4 mt-5">
		<div class="container px-lg-5">
			<!-- Page Features-->
			<?php $this->load->view($contenido); ?>
		</div>
	</section>
	<!-- Footer-->
	<footer class="footer">
		<div class="container">
			<p class="m-0 text-center">Copyright &copy; - Ronald Pariona -&nbsp;<?= date('Y') ?></p>
		</div>
	</footer>
	<!-- Vendor js -->
	<script src="<?= base_url('assets/js/vendor.min.js') ?>"></script>

	<!--Morris Chart-->
	<script src="<?= base_url('assets/libs/morris-js/morris.min.js') ?>"></script>
	<script src="<?= base_url('assets/libs/raphael/raphael.min.js') ?>"></script>

	<!-- Dashboard init js-->
	<script src="<?= base_url('assets/js/pages/dashboard.init.js') ?>"></script>

	<!-- App js -->
	<script src="<?= base_url('assets/js/app.min.js') ?>"></script>

</body>

</html>
