<ul class="nav navbar-nav flex-row justify-content-between ml-auto">
	<li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
	<li class="dropdown order-1">
		<button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
		<ul class="dropdown-menu dropdown-menu-right mt-1" style="min-width:220px;">
			<li class="px-3 pt-2">
				<!--< ?= form_open('home/auth', array('id' => 'auth', 'name' => 'auth', 'role' => 'form')) ?>-->
				<!--< ?= form_open('', array('id' => 'auth', 'name' => 'auth', 'role' => 'form', 'onsubmit' => 'window.location.reload()')) ?>-->
				<?= form_open('', array('id' => 'auth', 'name' => 'auth', 'role' => 'form')) ?>
				<div class="form-group">
					<input name="username" id="username" placeholder="Usuario" class="form-control form-control-sm" type="text" required="">
				</div>
				<div class="form-group">
					<input id="password" name="password" placeholder="Contraseña" class="form-control form-control-sm" type="password" required="">
				</div>
				<div class="form-group">
					<input type="submit" value="Ingresar" class="btn btn-info btn-block"></input>
				</div>
				<div id="error_msg" hidden>
				</div>
				<?= form_close() ?>
			</li>
		</ul>
	</li>
</ul>
<!-- <script type="text/javascript">
	$(document).ready(function() {
		$('#auth').on('submit', e => {
			e.preventDefault();
			var data = {
				'username': $('#username').val(),
				'password': $('#password').val(),
			};
			alert(data['username']);
			console.log(data);
			//exit();
			$.post("< ?php echo base_url('home/auth') ?>", data, 
				function(data, statusText, jqXHR) {
					console.log(statusText);
				});
			//window.addEventListener('load', preventFormSubmit);

		});
	});
</script> -->

<script type="text/javascript">
	$(document).ready(function() {
		$('#auth').on('submit', e => {
			e.preventDefault();
			var error_msg = '<div class="alert alert-danger alert-dismissible fade show px-2 py-1" role="alert" style="font-size: 0.8em; padding: 0px 10px; margin-bottom: 1px; height: 30px; line-height:30px;">' +
				'<strong>Error de usuario y/o contraseña</strong>' +
				'<button type="button" class="close px-2 py-1" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
			var data_form = {
				'username': $('#username').val(),
				'password': $('#password').val(),
			};
			//alert(data_form['username']);
			//console.log(data_form);
			$.ajax({
				url: "<?= base_url('home/auth') ?>",
				type: "POST",
				data: data_form,
				dataType: 'json',
				async: true,
				success: function(userData) {
					//console.log("Received user data:", userData);
					setTimeout(function() {
						console.log("Redirecting to Example Webpage...");
						window.location.href = "<?= base_url('home/') ?>"
					}, 100); // redirecting after 7 seconds
				},
				error: function(error) {
					$('#error_msg').html(error_msg);
					$('#error_msg').attr('hidden', false);
					console.error("Error:", error);
				}
			});
		});
	});
</script>
<!-- <script type="text/javascript">
	function login(){
		$(document).ready(function() {
		/*$('#auth').on('submit', e => {
			e.preventDefault();*/
			var data = {
				'username': $('#username').val(),
				'password': $('#password').val(),
			};
			alert(data['username']);
			console.log(data);
			//exit();
			$.post("< ?php echo base_url('home/auth') ?>", data,
				function(data, statusText, jqXHR) {
					console.log(jqXHR);
				});
				window.addEventListener('load', preventFormSubmit);

		//});
	});
	}
	
</script> -->
<!-- <script>
	$('#auth').on('submit', e => {
		e.preventDefault();
		var data_form = {
			'username': $('#username').val(),
			'password': $('#password').val(),
		};
		alert(data_form);
		console.log(data_form);
		//return false;
		$.ajax({
			type: 'POST',
			url: "< ?= base_url('home/auth') ?>",
			data: data_form,
			dataType: 'json',
			async: true
		}).done(function ajaxDone(res) {
			console.log('res'+jQuery.parseJSON(res.isLogged));
			//location.href('/')
		}).fail(function ajaxError(e) {
			console.log('e'+e);
		}).always(function ajaxAlways() {
			console.log('Final');
		})
		//return false;
		//window.addEventListener('load', preventFormSubmit);
		/*success: function(response) {
        if (response.status) {
          e.target.submit(); // rule met, allow form submission
        } else {
          console.log('Denied...');
          // show message to user here...
        }
      }
    });*/
	});
</script> -->
