  <?php 
include_once("./_initialize.php");

	if(isset($_REQUEST['product_generic_name'])&&isset($_REQUEST['station_id_code'])){
		$product_name		=	mysqli_real_escape_string($conn, $_REQUEST['product_generic_name']);
		$station_id			=	mysqli_real_escape_string($conn, $_REQUEST['station_id_code']);
		
		// converting the product name that was passed to this file to product id
		$product_id		=	prod_name_to_prod_id($product_name,$conn);
		
		// We pass the status of the product to the function below (available or not_available)
		update_product_status($station_id, $product_id, $date, $time, $conn);
 }
 else{
	?>
					ERROR!
		<?php
 }
 ?>