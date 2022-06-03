  <?php 
include_once("./_initialize.php");
	if(isset($_REQUEST['product_name'])&&isset($_REQUEST['station_accronym'])){
		$product_name	=	mysqli_real_escape_string($conn, $_REQUEST['product_name']);
		$gas_station	=	mysqli_real_escape_string($conn, $_REQUEST['station_accronym']);
		
		
		// The below fetches the price of the product from the gas station that was passed
		echo fetch_product_price(station_name_to_station_id($gas_station,$conn), prod_name_to_prod_id($product_name,$conn),$conn);
 }
 else{
	?>
			SORRY!
		<?php
 }
 ?>