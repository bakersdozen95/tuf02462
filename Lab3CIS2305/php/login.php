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
	if ($result) {		
		if (mysql_num_rows($result) == 1) { // login success
			session_regenerate_id();			
			$dataset = mysql_fetch_assoc($result);			
			$_SESSION["ID"] = $dataset["ID"];			
			session_write_close();
			$content = $emailLogin."+".$paswdLogin;
			setcookie("LoginInfo", $content, time()+3600, '/');	
			header("Location: loginSuccess.php");
			exit();		
		} else {	// login fail			
			header("Location: loginFailed.php");
			exit();		
		}
	}
	else {
		die("Query failed");
		exit();
	}
?>
