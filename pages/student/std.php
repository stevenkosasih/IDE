<!-- include connection -->
<?php
include_once("/IDE/phpScript/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>IDE</title>
	<!-- include style -->
	<?php
	include_once("/IDE/layout/style.php");
	?>
</head>

<body>
	<?php $myCourses = false ?>
	<!-- include header -->
	<?php
	include_once("/IDE/layout/header.php");
	?>
	<div class="w3-main">
		<!-- include sidebar -->
		<?php
		include_once("/IDE/layout/sidebar.php");
		include_once("IDE/phpScript/courses.php");
		?>
	</div>
</body>
</html>
