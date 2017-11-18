<!DOCTYPE html>

<html>
<?php
include_once("layout/style.php");

include_once("phpScript/connection.php");
?>
<head>
	<title>IDE</title>
</head>
<body>
	<div name="header" id="header">
		<button name="aboutUs">About us</button>
		<button name="Contact Us">Contact US</button>
		<button name="Help">Help</button>
	</div>
	<div name="bodyIDE" id="bodyIDE">
		<h2 class="word-white">IDE</h2><br>
		<h4 class="word-white">Interactive Digital Learning Environment</h4>
		<h5 class="word-white">-Faculty of Information Technology and Science</h5>
		<button class="modal-login-btn" onclick="displayModal()">Login</button>
		<!-- The Modal -->
		<div id="myModal" class="modal">

			<!-- Modal content -->
			<div class="modal-content">
				<span class="close">&times;</span>
				<h2>Login</h2>
				<form action="phpScript/login.php" method="POST">
					<input type="text" class="input" placeholder="Username" name="user">
					<input type="password" class="input" placeholder="Password" name="pass">
					<input type="submit" class="word-white" value="LOGIN" name="submit">
					<a href="#">Forget password</a>
					or
					<a href="#">forget username</a>
				</form>
			</div>

		</div>

	</div>
</body>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("modal-login-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
function displayModal(){
	modal.style.display="block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
</script>
</html>
