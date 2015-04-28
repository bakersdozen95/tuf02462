<?php 
	require_once("config.php");
	error_reporting(0);
	if($_POST['submit']=='Send')
	{
		$email=$_POST['email'];
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		
		if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
		$query = mysqli_query($con,"select * from User where Email='$email'")
			or die(mysqli_error($con)); 

 		if (mysqli_num_rows ($query)==1) 
 		{
			$code=rand();
			$message="Please click the following link to reset password: 
http://cis-linux2.temple.edu/~tuf02462/FinalProject/php/reset_pass.php?email=$email&Acode=$code";
			$headers = 'From: Support@bakerspellingbee.com' . "\r\n" .
    'Reply-To: tuf02462@temple.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
			mail($email, "Password reset request", $message, $headers);
			$datetime = date('Y-m-d H:i:s');
			$query2 = mysqli_query($con,"update User set Acode='$code', ADatetime='$datetime' where Email='$email'")
				or die(mysqli_error($con)); 
		} else {
			print "$email was not registered. <br>";
			exit(0);
		}
	}
?>
<script type="text/javascript">
	alert("Email Sent");
	window.location.assign("../index.html");
</script>