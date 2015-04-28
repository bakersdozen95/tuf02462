<?php
	session_start();
	if(!isset($_SESSION["failcount"])){
		$_SESSION["failcount"] = 1;
	}
	else{
		$_SESSION["failcount"]++;
		if($_SESSION["failcount"] > 3){
			header("Location: ../register.html");
		}
	}
	header("Location: ../index.html#page2");
?>