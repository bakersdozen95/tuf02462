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
		$score = $row["Score"];
		$wincount = $row["Winning"];
		$headers = 'From: Scores@bakerspellingbee.com' . "\r\n" .
    'Reply-To: tuf02462@temple.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    	$message = "Your score to date: $score correct\n";
    	$message .= "You've won $wincount times!";
		mail($email, "Your Score!", $message, $headers);
	} else {
		echo "Query failed";
		exit(0);
	}
	exit(0);
?>