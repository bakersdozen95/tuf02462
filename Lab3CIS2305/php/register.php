<?php
	session_start();
	require_once("config.php");
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if (!$link) {
		die("Failed to connect to server: ".mysql_error());
	}
	$db = mysql_select_db(DB_DATABASE);
	if (!$db) {
		die("Unable to select database");
	}		
	$emailLogin = $_POST["email"];
	$paswdLogin = $_POST["paswd"];
	if (($emailLogin == "") || ($paswdLogin=="")) {		
		session_write_close();
		header("Location: badInput.php");
		exit();	
	}
	$qry="SELECT * FROM User WHERE Email='$emailLogin' AND Password='$paswdLogin';";
	$result=mysql_query($qry);
	$count = mysqli_num_rows($qry);
	if ($count > 0)
	{	// Email already exists 
		$_SESSION['ID']=-3;
		header("Location: ../index.html");
		exit(0);
	}
	$code = rand(); // This creates the activation code
	$datetime = date('Y-m-d H:i:s'); 
	$input = "INSERT INTO User (Email, Password, Status, Rank, Acode, ADatetime, Winning, Score) VALUES ('$emailLogin', '$paswdLogin', 0, 0, '$code', '$datetime', 0, 0);";
	$result = mysql_query($input);
	if ($result){
		unset($_SESSION["failcount"]);
		$message="Please click the following link to activate your registration: 
//*http://cis-linux2.temple.edu/~tuf02462/FinalProject/php/confirm_registration.php?email=$emailLogin&Acode=$code";*//
		$headers = 'From: Support@bakerspellingbee.com' . "\r\n" .
    'Reply-To: tuf02462@temple.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
		mail($emailLogin, "Account Activation Confirmation", $message, $headers);
		header("Location: ../index.html");
		exit();
	}
	else{
		die("Query Failed");
		exit();
	}
?>