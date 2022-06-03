<?php 
 include_once("./_initialize.php");
 if(isset($_SESSION['userId_site'])){
 $name = mysqli_real_escape_string($conn,$_SESSION['userId_site']);
 }
 else{
		$name = mysqli_real_escape_string($conn,trim($_POST['nameSent']));
 }
	$email = mysqli_real_escape_string($conn,trim($_POST['emailSent'])); 
	$message = mysqli_real_escape_string($conn,trim($_POST['messageSent']));
	if(isset($name)&&isset($email)&&isset($message)){
 $qury = mysqli_query($conn,"INSERT INTO contact_us(Sender_Name,Sender_Email,Contact_Message,Attended_To,Contact_Date,Contact_Time) VALUES('$name','$email','$message','No','$date','$time')");
 if($qury){	
	echo "success";	
 }
 else{
	echo "failure";
 }
 
	}
	else{
		echo "failure";
	}
	?>