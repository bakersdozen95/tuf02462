<?php
	session_start();
	require_once("config.php");
	if (isset($_GET["Acode"])) {
		$_SESSION["Acode"] = $_GET['Acode'];
	}
	$acode = $_SESSION["Acode"];  
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$query = mysqli_query($con,"select * from User where Acode='$acode'")
		or die(mysqli_error($con));
	$test= mysqli_num_rows($query); 
	if (mysqli_num_rows ($query)==1) 
	{
		$rand = rand(); // password security
		$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
		$startTime = $row["ADatetime"];
		$now = date('Y-m-d H:i:s');
		print "Now=$now<br>";
		if ((round(abs($now - $startTime),2)/60) > 120) {
			print "Your Password Session is expired.<br>";
			exit(0);
		} else {
			$_SESSION["ID"] = $row["ID"];
			$query3="update User set Status=1, Acode='$rand' where Acode='$acode'";
			$result = mysqli_query($con, $query3) 
				or die(mysqli_error($con));
		}
	} else {
		print 'Your Activation Code Expired. Please try again <br>';
		exit(0);
	}
?>
<script type="text/javascript">
	alert("You have successfully registered!");
	window.location.assign("../index.html");
</script>