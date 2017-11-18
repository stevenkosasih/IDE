<!DOCTYPE html>
<?php
	include_once("../IDE/phpScript/connection.php");
	include_once("../IDE/layout/style.php");
?>
<html>
	<head>
		<title>IDE</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<style>
		body{
			background-image: url("img/bgImg.jpg");
		}
	</style>
	<body>
		<div id="header">
			<div class="w3-padding w3-display-topright">
				<button class="w3-button w3-gray w3-opacity-min" name="aboutUs">About us</button>
				<button class="w3-button w3-gray w3-opacity-min" name="contactUs">Contact us</button>
				<button class="w3-button w3-gray w3-opacity-min" name="help">Help</button>
			</div>
		</div>
		<div class="w3-text-white w3-display-middle w3-display-left w3-padding-large">
			<div>
				<h1 class="w3-jumbo">IDE</h1>
			</div>
			<div>
				<h4>Interactive Digital Learning Environment</h4>
			</div>
			<div>
				<h5>-Faculty of Information Technology and Science</h5>
			</div>
		</div>
		<div class="w3-container" style="margin-top:32.5%; padding-left:3%">
			<button class="w3-button w3-gray w3-opacity-min" onclick="document.getElementById('logModal').style.display='block'">Login</button>
			<div id="logModal" class="w3-modal">
				<div class="w3-modal-content w3-card-4 w3-animate-zoom w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border-black" style="max-width:35%">
					<div class="w3-center"><br>
						<span onclick="document.getElementById('logModal').style.display='none'" class="w3-button w3-x w3-hover-black w3-display-topright" title="Close Modal">&times;</span>
						<p class="w3-xlarge" style="float:left; margin:0px; margin-left:10px;">Login</p>
					</div>
					<form class="w3-container" action="phpScript/login.php" method="POST">
						<div class="w3-section">
							<input class="w3-input w3-border-bottom w3-margin-bottom" type="text" placeholder="Username" name="username" value='<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}?>' required >
							<input class="w3-input w3-border-bottom" type="password" placeholder="Password" name="password" required>
							<button class="w3-button w3-black" style="margin-top:10px" type="submit">Login</button>
						</div>
						<div>
							<span class="w3-left w3-padding w3-hide-small"><a href="#">Forgot password</a> or <a href="#">Forgot username</a>?</span>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="w3-text-white w3-bottom w3-padding">
			<p> &copy Developed by Maria Veronica Claudia Muljana, S.T.</p>
		</div>
		<script>
			var modal = document.getElementById('logModal');

			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
		</script>
	</body>
</html>
