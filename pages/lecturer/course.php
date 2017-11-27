<?php
  include("C:/xampp/htdocs/IDE/phpScript/courses.php");
//  include("C:/xampp/htdocs/IDE/phpScript/sessionStart.php")
//echo print_r($_SESSION);


?>
<<<<<<< HEAD
<a href="course.php"><?php  echo $_SESSION['course'] ;?></a>
=======
<a href='<?php echo "course.php?id=".$_SESSION['courseID']."&courseTitle=".$_SESSION['courseCode'] ;?>'></a>
>>>>>>> 1cd174d97274494585b511576c5c1f78a7852468
