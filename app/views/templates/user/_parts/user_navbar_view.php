<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary mb-5">
		<div class="container-fluid d-flex justify-content-between">
			<div>
				<h4><a style="text-decoration: none;" href="/">RP&nbsp;<span style="color:azure">asistencia
							técnica</span></a></h4></a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!--<ul class="navbar-nav ms-auto mb-2 mb-lg-0">-->
				<ul class="navbar-nav ml-md-auto">
					<li class="nav-item"><a class="nav-link" aria-current="page" href="<?= site_url('/registroatr') ?>">Registro de asistentes &nbsp;</a></li>
					<li class="nav-item"><a class="nav-link" href="#!">Institutos &nbsp;</a></li>
				</ul>
				<ul class="navbar-nav ms-auto mb-lg-0">
					<?php if ($this->session->userdata('user_role')) : ?>
						<li class="nav-item">
							<a href="<?= site_url('/logout') ?>" class="btn btn-danger">Salir</a>
						</li>
					<?php else : ?>
						<li class="nav-item">
							<a href="<?= site_url('/login') ?>" class="btn btn-primary">Ingreso</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>

	</nav>
