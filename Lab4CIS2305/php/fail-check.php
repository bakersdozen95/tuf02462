<?php
	session_start();
	if((isset($_SESSION["failcount"])) && ($_SESSION["failcount"] > 0)){
		if($_SESSION["failcount"] > 3){
			echo 2;
		}
		else{
			echo 1;
		}
	}
	else{
		echo 0;
	}
?>