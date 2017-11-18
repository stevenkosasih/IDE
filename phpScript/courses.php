<?php
include("connection.php");

$sql="SELECT courses.code+'/'+courses.course as course, courses.ID_C as idC
FROM courses JOIN enrollments
ON courses.ID_C=enrollments.ID_C
WHERE '$_SESSION['idU']'=enrollements.ID_U";
$result=$conn->query($sql);
$row=$result->fetch_array();
$_SESSION['courseCode']=$row['code'];
$_SESSION['course']=$row['course'];
?>

<a href='<?php echo "course.php?id=".$_SESSION['courseID']."&courseTitle=".$_SESSION['courseCode'] ;?>'></a>
