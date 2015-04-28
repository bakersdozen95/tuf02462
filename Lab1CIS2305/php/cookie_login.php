<?php
	session_start();
	require_once("config.php");
	if(isset($_POST["email"])){
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$email = $_POST["email"];
		$paswrd = $_POST["paswrd"];
		$query = mysqli_query($con,"select * from User where Email='$email' and Password='$paswrd';")
			or die(mysqli_error($con));
		if (mysqli_num_rows ($query)==1) 
		{
			$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
			$_SESSION["ID"] = $row["ID"];
			echo $email;
			exit(0);
		} else {
			echo "Query failed";
			exit(0);
		}
	}
?>