  <?php 
include_once("./_initialize.php");
	session_unset();
	$logout	=	session_destroy();
	if($logout){
		?>
		<script>window.location = "../"; </script>
		<?php
	}
	
 ?>