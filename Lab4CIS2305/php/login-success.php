<?php
	session_start();
	unset($_SESSION["failcount"]);
	header("Location: ../index.html");
?>