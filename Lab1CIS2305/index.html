<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Spelling Bee</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link href="https://s3.amazonaws.com/codiqa-cdn/codiqa.ext.css" rel="stylesheet">
		<link href="https://s3.amazonaws.com/codiqa-cdn/mobile/1.4.0/jquery.mobile-1.4.0.css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="https://s3.amazonaws.com/codiqa-cdn/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
		<script src="https://s3.amazonaws.com/codiqa-cdn/codiqa.ext.js"></script>
		<script src="js/wordsSpeech.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/spelling_bee.css" title="style"/>
	</head>
	<body>
		<div data-role="page" data-control-title="Home" id="page1">
			<div data-theme="" data-role="header">
				<span class="ui-title">
				</span>
			</div>
			<div role="main" class="ui-content">
				<div data-role="navbar" data-iconpos="top">
					<ul>
						<li>
							<a id="login" href="#page2" data-transition="fade" data-theme="" data-icon="plus">
								Login
							</a>
						</li>
						<li>
							<a id="insider" href="#page3" data-transition="fade" data-theme="" data-icon="grid">
								Insider
							</a>
						</li>
					</ul>
				</div>
				<div style=" text-align:center" data-controltype="image" id="spellingbee">
					<img style="width: 40%; height: 40%" src="http://about.library.ubc.ca/files/2012/10/SpellingBee_Library.png">
				</div>
				<div id="Controls" data-role="navbar" data-iconpos="top">
					<ul id="ulGroup">
						<li>
							<a href="#page1" data-transition="fade" data-theme="" data-icon="star" id="Start">
								Start
							</a>
						</li>
				
						<li>
							<a href="#page1" data-transition="fade" data-theme="" data-icon="refresh" id="Listen">
								Listen
							</a>
						</li>
					</ul>
        		</div>
				<div class="ui-field-contain" data-controltype="textinput">
					<input name="input" id="input" placeholder="Spelling..." value=""
					type="text">
				</div>
				<ul data-role="listview" data-divider-theme="a" data-inset="true" id="checkWords">
					<li data-role="list-divider" role="heading">
						Scores
					</li>
					<div id="words"></div>
				</ul>  
				<div data-theme="a" data-role="footer" data-position="fixed">
					<span class="ui-title">
					</span>
				</div>
			</div>
		</div>
	
		<div data-role="page" data-control-title="Login" id="page2">
			<div data-role="content">
				<a href="#page1" data-transition="fade" data-icompos="left" class="ui-btn ui-icon-home ui-btn-icon-left" data-icon="home">
					Home
				</a>
				<iframe data-controltype="youtube" id="youtube2" width="560px" height="315px" src="http://www.youtube.com/embed/CtDF2ZeYkjw" frameborder="0" style="display:block; margin: 0 auto;">
        		</iframe>
				<form action="php/login.php" method="post" data-ajax="false">
					<div data-role="fieldcontain" data-controltype="textinput">
						<input name="email" id="email" placeholder="Email" value="" type="email">
					</div>
					<div data-role="fieldcontain" data-controltype="textinput">
						<input name="paswd" id="paswd" placeholder="Password" value="" type="password">
					</div>
					<div id="Controls" data-role="navbar" data-iconpos="top">
						<ul id="ulGroup">
							<li>
								<input id="loginformbutton" type="submit" data-theme="b" value="Login" data-inline="true">
							</li>
							<li>
								<a href="forgot_password.html" data-transition="fade" data-icompos="left" data-role="button" data-icon="" data-inline="true">
									Forgot Password?
								</a>
							</li>
						</ul>
					</div>
				</form>
				
				<h1 style="display: block; width: 100%; text-align:center;">Not a Member?</h1>
				<a href="register.html" data-role="button" data-theme="c" data-transition="fade" data-icon="circle">
					Click here to signup!
				</a>
			</div>
		</div>
		<div data-role="page" data-control-title="Insider" id="page3">
			<div data-role="content">
				<a href="#page1" data-transition="fade" data-icompos="left" class="ui-btn ui-icon-home ui-btn-icon-left" data-icon="home">
					Home
				</a>
				<div id="map" class="google-map" style="width: 288px; height: 200px; margin-left: auto; margin-right: auto">
				</div>
				<script type="text/javascript">
					window.CodiqaControls && window.CodiqaControls.register('googlemaps', 'map', {ready: function(control) {

						control.options = {
							zoom: 14,
							mapTypeId: google.maps.MapTypeId.ROADMAP
						};

						control.el = document.getElementById(control._id);
						control.map = new google.maps.Map(control.el, control.options);

						var geocoder = new google.maps.Geocoder();
						geocoder.geocode({
							'address': 'Philadelphia, PA'
						}, function(results, status) {
							if (status == google.maps.GeocoderStatus.OK) {

								var marker = new google.maps.Marker({
									map: control.map,
									position: results[0].geometry.location
								});
								control.center = results[0].geometry.location;
								control.map.setCenter(control.center);
							}
						});

						}
					});
				</script>

				<div data-role="fieldcontain" data-controltype="searchinput">
					<input name="" id="search" placeholder="Dictionary Search" value="" type="search">
				</div>
				<form action="">
					<div data-role="fieldcontain" data-controltype="dateinput">
						<label for="date">
							Scores With Dates
						</label>
						<input name="" id="date" placeholder="" value="" type="date">
					</div>
					<input id="scores" type="submit" data-theme="b" value="Your Scores">
				</form>
				<a id="share" data-role="button" onclick="mailScores()">
					Send me my scores
				</a>
			</div>
		</div>
		<script type="text/javascript">
			$.ajax({
				type: "POST",  
    			url: "php/hit_counter.php",
    			data: {},
    			success: function(data){
    				//alert(data);
    			}
			});
			$.ajax({  
    			type: "POST",  
    			url: "php/auth.php",
    			data: {},
    			success: function(data){
    				if(data == "1"){
    					$('#insider').removeClass('ui-disabled');
    					$('#login').text('Logout');
    					$('#login').attr('href', '');
    					$('#login').buttonMarkup({ icon: "minus" });
    					$('#login').bind("click", function(){
  							$.ajax({
  								type: "POST",
  								url: "php/logout.php",
  								data: {},
  								success: function(data){
  									alert("Logout Successful");
  									location.reload();
  								}
  							});
						});
    				}
    				else{
    					$('#insider').addClass('ui-disabled');
    					$('#login').text('Login');
    					$('#login').attr('href', '#page2');
    					$('#login').unbind("click");
    				}
    			}
    		});

			$.ajax({
				type: "POST",
				url: "php/fail-check.php",
				data: {},
				success: function(data){
					if(data == "1"){
						$('#forgotpass').html("Forgot Password?");
					}
					else if(data == "2"){
						$('#forgotpass').html("Forgot Password? or Signup");
						$('#loginformbutton').addClass('ui-disabled');
					}
				}
			});
			if(getCookie("LoginInfo") != ""){
				var pemail = getCookie("LoginInfo").split("+");
				var actualEmail = pemail[0];
				var actualPassword = pemail[1];
				$.ajax({
					type: "POST",
					url: "php/cookie_login.php",
					data: {email: actualEmail, paswrd: actualPassword},
					success: function(data){
						if(data == actualEmail){
							alert("Welcome back " + data);
							window.location.assign("index.html#page3");
						}
					}
				});
			}
			
			function mailScores(){
				$.ajax({
					type: "POST",
					url: "php/email_scores.php",
					data: {},
					success: function(data){
						alert("Your scores have been sent.");
					}
				});
			}
			
			function getCookie(c_name) { 
				if (document.cookie.length>0) 
				{ 
					c_start=document.cookie.indexOf(c_name + "="); 
					if (c_start!=-1) 
					{ 
						c_start=c_start + c_name.length+1 ; 
						c_end=document.cookie.indexOf(";",c_start); 
						if (c_end==-1) c_end=document.cookie.length 
							return unescape(document.cookie.substring(c_start,c_end)); 
					} 
				} 
				return ""; 
			}
		</script>
	</body>
</html>