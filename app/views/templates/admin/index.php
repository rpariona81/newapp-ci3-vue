<?php
$this->load->view('templates/admin/_parts/admin_header');
$this->load->view('templates/admin/_parts/admin_sidebar');
$this->load->view('templates/admin/_parts/admin_navbar');

?>
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<!--<div class="wrapper">
<!-- 
	<!-- Start Content-->
<!--<div class="container-fluid">
		< ?php echo $content; ?>
	</div>

</div> -->



<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
	<!--begin::Container-->
	<div id="kt_content_container" class="container-xxl">
				<?php echo $content; ?>
		
	</div>
	<!--end::Container-->
</div>
<!--end::Post-->
</div>
<!--end::Content-->


<?php
$this->load->view('templates/admin/_parts/admin_footer');
?>