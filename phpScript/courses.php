<?php
include("connection.php");

$sql="SELECT courses.code+'/'+courses.course as course, courses.ID_C as idC
FROM courses JOIN enrollments
ON courses.ID_C=enrollments.ID_C
WHERE '$_SESSION['idU']'=enrollements.ID_U";
$result=$conn->query($sql);
$row=$result->fetch_array();
$courseID=$row['courseID'];
$course=$row['course'];
?>

<a href='<?php echo "course.php?id=".$courseID."&courseTitle=".$course ;?>'></a>
