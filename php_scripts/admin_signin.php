  <?php 
include_once("./_initialize.php");
	if(isset($_REQUEST['admin_username'])&&isset($_REQUEST['admin_password'])){
		$username	=	trim(mysqli_real_escape_string($conn, $_REQUEST['admin_username']));
		$password	=	trim(mysqli_real_escape_string($conn, $_REQUEST['admin_password']));
		
		// calling the method that queries the user's authenticity
		echo sign_admin_in($username, $password, $conn);
	 }
	 else{
			echo "failed";
	 }
 ?>