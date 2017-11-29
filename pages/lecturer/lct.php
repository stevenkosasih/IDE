<!DOCTYPE html>
<!-- include connection -->
<?php
include("../../phpScript/connection.php");
include("../../phpScript/sessionStart.php");
?>

<html>
<head>
	<title>IDE</title>
	<!-- include style -->
	<?php
	include("../../layout/style.php");
	?>
</head>

<body>
	<?php $myCourses = false ?>
	<!-- include header -->
	<?php
	include("../../layout/header.php");
	?>
	<div class="w3-main">
		<!-- include sidebar -->
		<?php
		include("../../layout/sidebar.php");
		if($_SESSION["isCourse"]==true){
			include("course.php");
			include("../../phpScript/topics.php");

		}else{
			include("addingActivity.php");
		}

		?>
	</div>
</body>
</html>
