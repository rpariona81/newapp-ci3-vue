<?php
$this->load->view('templates/user/_parts/user_header_view');
$this->load->view('templates/user/_parts/user_navbar_view');
?>
<div class="wrapper">
  <div class="container-fluid">
    <?php echo $content; ?>
  </div>
</div>
<?php

$this->load->view('templates/user/_parts/user_footer_view');
?>
