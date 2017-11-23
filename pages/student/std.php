<!-- include connection -->
<?php
include("/IDE/phpScript/connection.php");
?>

<html>
<head>
	<title>IDE</title>
	<!-- include style -->
	<?php
	include("/IDE/layout/style.php");
	?>
</head>

<body>
	<?php $myCourses = false ?>
	<!-- include header -->
	<?php
	include("../IDE/layout/header.php");
	?>
	<div class="w3-main">
		<!-- include sidebar -->
		<?php
		include("../IDE/layout/sidebar.php");
		include("course.php");
		?>
	</div>
</body>
</html>
