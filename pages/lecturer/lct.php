<!-- include connection -->
<?php
include("C:/xampp/htdocs/IDE/phpScript/connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>IDE</title>
	<!-- include style -->
	<?php
	include("C:/xampp/htdocs/IDE/layout/style.php");
	?>
</head>

<body>
	<?php $myCourses = false ?>
	<!-- include header -->
	<?php
	include("C:/xampp/htdocs/IDE/layout/header.php");
	?>
	<div class="w3-main">
		<!-- include sidebar -->
		<?php
		include("C:/xampp/htdocs/IDE/layout/sidebar.php");
		include("C:/xampp/htdocs/IDE/phpScripts/topics.php");
		include("course.php");
		echo print_r($_SESSION);
		?>
	</div>
</body>
</html>
