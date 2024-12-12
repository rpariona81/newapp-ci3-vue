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
	<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">-->
	<nav class="mb-5 navbar navbar-expand-lg fixed-top navbar-dark bg-primary" role="navigation">
		<div class="container">
			<a class="navbar-brand" href="/">Asistencia Técnica</a>
			<button class="border-0 navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
				&#9776;
			</button>
			<div class="collapse navbar-collapse" id="exCollapsingNavbar">
				<ul class="nav navbar-nav">
					<li class="nav-item"><a class="nav-link" aria-current="page" href="<?= base_url('registroatr') ?>">Registro de asistentes</a></li>
					<li class="nav-item"><a class="nav-link" href="#!">Portales web</a></li>
				</ul>
				<?php
                if ($this->session->userdata('user_role')) {
					/*echo '<ul class="list-unstyled float-right mb-0">';
					echo '<li class="dropdown notification-list">';
					echo '<a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">';
                    echo '<span class="d-none d-sm-inline-block ml-1 font-weight-medium">'.$this->session->userdata('user_nickname').' ('.$this->session->userdata('user_role') . ')</span>';
					echo '</a>';
					echo '</li>';
					echo '</>';*/
                } else {
					$this->load->view('auth/login_view');
                }
                ?>
				<!-- <ul class="flex-row ml-auto nav navbar-nav justify-content-between">
					<li class="order-2 nav-item order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
					<li class="order-1 dropdown">
						<button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
						<ul class="mt-1 dropdown-menu dropdown-menu-right">
							<li class="px-3 pt-2">
								< ?= form_open('home/auth', array('id' => 'auth', 'name' => 'auth', 'role' => 'form')) ?>
								<div class="form-group">
									<input name="username" id="username" placeholder="Usuario" class="form-control form-control-sm" type="text" required="">
								</div>
								<div class="form-group">
									<input id="password" name="password" placeholder="Contraseña" class="form-control form-control-sm" type="password" required="">
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-info btn-block"></input>
								</div>
								< ?= form_close() ?>
							</li>
						</ul>
					</li>
				</ul> -->
				
			</div>
		</div>
	</nav>

	<!-- Header-->
	<!-- <header class="py-5 mt-5">
		<div class="container px-lg-5">
			<div class="p-4 text-center p-lg-5 bg-light rounded-3">
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
	<!-- <script src="<?= base_url('assets/libs/morris-js/morris.min.js') ?>"></script> -->
	<script src="<?= base_url('assets/libs/raphael/raphael.min.js') ?>"></script>

	<!-- Dashboard init js-->
	<!-- <script src="<?= base_url('assets/js/pages/dashboard.init.js') ?>"></script> -->

	<!-- App js -->
	<script src="<?= base_url('assets/js/app.min.js') ?>"></script>

</body>

</html>
