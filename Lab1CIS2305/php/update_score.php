<?php
	session_start();
	require_once("config.php");
	if(!isset($_POST['count'])){
		exit(0);
	}
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
		$query2 = mysqli_query($con, "update User SET Score=Score+1 where ID='$id'")
			or die(mysqli_error($con));
	} else {
		exit(0);
	}
	exit(0);
?>