<?php 
include_once("./_initialize.php");
	if(isset($_REQUEST['product_name_to_query'])){
		$product_name	=	mysqli_real_escape_string($conn, $_REQUEST['product_name_to_query']);
		// $query = mysql_query("SELECT * FROM product_availability WHERE Product_Name='$product_name'");
		$query = mysqli_query($conn, "SELECT * FROM product_availability WHERE product_availability.Product_Id = (SELECT Product_Id FROM products WHERE products.Product_Generic_Name='$product_name') AND  product_availability.Product_Status='available'") or mysql_error();
		$count	=	mysqli_num_rows($query);
		if( $count > 0) {
		?>
				<?php if($count > 1){ ?><span style="background-color:green; color:green; border-radius: 20px; padding:0px;">O</span> <span class="alert alert-success" ><?php echo $count; ?> gas stations </span> <?php } elseif($count == 1){ ?><span style="background-color:green; color:green; border-radius: 20px; padding:0px;">O</span> <span class="alert alert-success" ><?php echo $count; ?>  gas station </span> <?php } else{ ?><span  style="background-color:red; color:red; border-radius: 20px; padding:0px;">O</span> <span class="alert alert-danger" > 0 gas station  </span><?php } ?>
			<?php
		}
		 else{ // if username already exists
		?>
					<span  style="background-color:red; color:red; border-radius: 20px; padding:0px;">O</span> <span class="alert alert-danger" > 0 gas station  </span>
		<?php
		}
 }
 else{
	?>
					<span  style="background-color:red; color:red; border-radius: 20px; padding:0px;">O</span> <span class="alert alert-danger" > 0 gas station  </span>
		<?php
 }
 ?>