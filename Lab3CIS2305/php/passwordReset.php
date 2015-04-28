<?php
	session_start();
	require_once("config.php");
	if (isset($_GET["Acode"])) {
		$_SESSION["Acode"] = $_GET['Acode'];
	}
	if(isset($_POST['pass'])){
    	$pass = $_POST['pass'];
		$acode = $_SESSION["Acode"];  // Only session vars are preserved
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
		
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
			if ((round(abs($now - $startTime),2)/60) > 120) {
				print "Your Password Session is expired.<br>";
				exit(0);
			} else {
				$query3="update User set Password='$pass', Acode='$rand' where Acode='$acode'";
				$result = mysqli_query($con, $query3) 
					or die(mysqli_error($con));
				?>
				<script type="text/javascript">
					alert("Password reset successfully.");
					window.location.assign("../index.html");
				</script>
				<?php
			}
		} else {
			?>
			<script type="text/javascript">
				alert("Your activation code has expired. Please try again.");
				window.location.assign("../index.html");
			</script>
			<?php
		}
		exit(0);
	}
?>
	<head>
		<meta charset="utf-8">
		<title>Reset Password</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link href="https://s3.amazonaws.com/codiqa-cdn/codiqa.ext.css" rel="stylesheet">
		<link href="https://s3.amazonaws.com/codiqa-cdn/mobile/1.4.0/jquery.mobile-1.4.0.css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="https://s3.amazonaws.com/codiqa-cdn/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
		<script src="https://s3.amazonaws.com/codiqa-cdn/codiqa.ext.js"></script>
	</head>
	<body>
		<div data-role="page" data-control-title="Signup" id="signup">
			<div data-theme="" data-role="header">
				<span class="ui-title">
					Reset Password
				</span>
			</div>
			<div role="main" class="ui-content">
				<div data-role="navbar" data-iconpos="top">
					<ul>
						<li>
							<a href="../index.html" data-transition="" data-theme="" data-icon="home">
								Home
							</a>
						</li>
					</ul>
				</div>
				<form action="reset_pass.php" method="POST" data-ajax="false">
					<input type="password" name="pass" placeholder="Enter New Password" />
					<input type="submit"  name="submit" value="Reset" />
				</form>
			</div>
		</div>
	</body>
</html>


