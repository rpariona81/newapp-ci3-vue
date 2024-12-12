<?php
$this->load->view('templates/_parts/user_header_view');
$this->load->view('templates/_parts/user_navbar_view');
?>
<div class="wrapper">
	<!-- <div class="container-fluid"> -->
	<?= $content ?>
	<!-- </div> -->
</div>
<?php

$this->load->view('templates/_parts/user_footer_view');
?>
