  <?php 
include_once("./_initialize.php");

	if(isset($_REQUEST['product_generic_name'])&&isset($_REQUEST['station_id_code'])){
		$product_name		=	mysqli_real_escape_string($conn, $_REQUEST['product_generic_name']);
		$station_id			=	mysqli_real_escape_string($conn, $_REQUEST['station_id_code']);
		$product_new_price	=	mysqli_real_escape_string($conn, $_REQUEST['product_new_price']);
		// echo prod_name_to_prod_id($product_name,$conn);
		// // echo "<br />";
		// // echo prod_id_to_prod_name("22222202",$conn);
		
		// converting the product name that was passed to this file to product id
		$product_id		=	prod_name_to_prod_id($product_name,$conn);
		
		// Passing the product_id gotten above to the function
		create_or_update_product_price($station_id, $product_id, $product_new_price, $date, $time, $conn);
 }
 else{
	?>
					NO GAS STATION WAS PASSED
		<?php
 }
 ?>