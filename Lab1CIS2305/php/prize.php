<?php
	session_start();
	require_once("config.php");
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$id = $_SESSION["ID"];
	$query = mysqli_query($con,"select * from User where ID='$id'")
		or die(mysqli_error($con));
	$test= mysqli_num_rows($query); 
	if (mysqli_num_rows ($query)==1) 
	{
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
		$email = $row["Email"];
		$headers='MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html;charset=iso-8859-1' . "\r\n";
		$headers .= 'From: Prizes@bakerspellingbee.com' . "\r\n" .
    'Reply-To: tuf02462@temple.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    	$message = '<a><img src="http://cis-linux2.temple.edu/~tuf02462/FinalProject/pictures/google-adwords-coupon-code.png"</a>';
		mail($email, "You've Won A Prize!", $message, $headers);
		$query2 = mysqli_query($con, "update User set Winning=Winning+1 where ID='$id'")
			or die(mysqli_error($con));
	} else {
		echo "NLI";
		exit(0);
	}
	echo "SUCCESS";
	exit(0);
?>