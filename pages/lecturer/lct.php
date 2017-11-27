

<!DOCTYPE html>

<!-- include connection -->
<?php
<<<<<<< HEAD
include("C:/xampp/htdocs/IDE/phpScript/connection.php");?>
=======
?>
>>>>>>> 1cd174d97274494585b511576c5c1f78a7852468

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
		include("course.php");
		?>
	</div>
</body>
</html>
