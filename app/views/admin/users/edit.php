<div class="container-fluid">

	<!-- start page title -->
	<!-- <div class="row">
		<div class="col-12">
			<div class="page-title-box">
				<div class="page-title-right">
					<ol class="m-0 breadcrumb">
						<li class="breadcrumb-item"><a href="javascript: void(0);">Uplon</a></li>
						<li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
						<li class="breadcrumb-item active">General Elements</li>
					</ol>
				</div>
				<h4 class="page-title">General Elements</h4>
			</div>
		</div>
	</div> -->
	<!-- end page title -->
	<div class="card-header bg-warning border mt-3">
		<h4 class="page-title">Actualización de usuario</h4>
	</div>

	<div class="row">
		<div class="col-12">
			<div class="card-box">

				<div class="row">
				<div class="card-body">
						<?= form_open('admin/users/update', array('id' => 'form_edit')); ?>
						<div class="breadcrumb"><strong>Datos de acceso </strong> </div>
						<input type="hidden" id="id" name="id" value="<?= $user->id ?>">
						<div class="row pt-1">
							<div class="col-md-4">
								<div class="mb-3">
									<label for="username">Usuario</label>
									<?= form_input(array('type' => 'text', 'name' => 'username', 'id' => 'username', 'maxlength' => '30', 'onkeyup' => 'this.value=this.value.toLowerCase()', 'readonly' => 'true', 'size' => '100', 'value' => $user->username, 'class' => 'form-control')); ?>
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label for="email">Correo electrónico</label>
									<input type="email" class="form-control" value="<?= $user->email ?>" name="email" id="email" placeholder="Enter email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label for="display_name">Nombre a mostrar</label>
									<?= form_input(array('type' => 'text', 'name' => 'display_name', 'id' => 'display_name', 'maxlength' => '30', 'size' => '100', 'value' => $user->display_name, 'class' => 'form-control')); ?>
								</div>
							</div>
						</div>

						<div class="row pt-1 mb-3">
							<div class="col-md-4">
								<div class="mb-3">
									<label for="password" class="form-label">Contraseña</label>
									<!--<input type="password" id="txtPassword" class="form-control" name="password" placeholder="Contraseña" required>-->
									<div class="input-group has-validation">
										<?= form_input(array('type' => 'password', 'name' => 'password', 'id' => 'txtPassword', 'maxlength' => '30', 'onkeyup' => 'this.value=this.value.toLowerCase()','value' => $user->pwd, 'size' => '30', 'class' => 'form-control', 'placeholder' => 'Contraseña', 'required' => 'true')); ?>
										<div class="input-group-append">
											<button id="show_password" class="btn input-group-text d-block px-3" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon1"></span> </button>
										</div>
									</div>
									<small class="text-muted">Establezca una contraseña de al menos 8 caracteres</small>
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label for="mobile">Teléfono móvil</label>
									<input type="text" class="form-control" value="<?= $user->mobile ?>" name="mobile" id="mobile" placeholder="Enter mobile">
								</div>
							</div>
							<div class="col-md-4">
								<div class="mb-3">
									<label for="role_id">Rol</label>
									<?= form_dropdown('role_id', $roles, $user->role_id, array('class' => 'form-control input-sm', 'id' => 'role_id')); ?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<?php if ($this->session->flashdata('error')) : ?>
								<p class='alert alert-danger'> <?= $this->session->flashdata('error') ?> </p>
							<?php endif ?>
							<?php if ($this->session->flashdata('message')) : ?>
								<p class='alert alert-success'> <?= $this->session->flashdata('message') ?> </p>
							<?php endif ?>
						</div>
						<div class="mx-auto text-center col-12">
							<button type="submit" class="btn btn-primary">Actualizar</button>
							<a type="button" class="btn btn-warning" href="<?= base_url('admin/users') ?>"><i class="fa fa-undo" aria-hidden="true"></i>
								Volver</a>
						</div>

						<?= form_close() ?>
					</div><!-- end col -->

				</div><!-- end row -->
			</div>
		</div><!-- end col -->
	</div>
	<!-- end row -->
</div>
<!--https://www.baulphp.com/3-formas-para-mostrar-y-ocultar-contrasenas/-->
<script>
	function mostrarPassword() {
		var cambio1 = document.getElementById("txtPassword");
		if (cambio1.type == "password") {
			cambio1.type = "text";
			$('.icon1').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		} else {
			cambio1.type = "password";
			$('.icon1').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	}

	// function mostrarRepeatPassword() {
	// 	var cambio2 = document.getElementById("txtRepeatPassword");
	// 	if (cambio2.type == "password") {
	// 		cambio2.type = "text";
	// 		$('.icon2').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
	// 	} else {
	// 		cambio2.type = "password";
	// 		$('.icon2').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
	// 	}
	// }
</script>
