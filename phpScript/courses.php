<?php
include("connection.php");
$id=$_SESSION['idU'];
$sql="SELECT courses.code+'/'+courses.course as course, courses.ID_C as idC
FROM courses JOIN enrollments
ON courses.ID_C=enrollments.ID_C
WHERE '$id'=enrollements.ID_U ";
$result=$conn->query($sql);
$row=$result->fetch_array();
$_SESSION['courseCode']=$row['code'];
$_SESSION['course']=$row['course'];
?>
