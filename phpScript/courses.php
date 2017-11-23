<?php
include("connection.php");
include("sessionStart.php");

$id=$_SESSION['idU'];
$sql="SELECT courses.code as code,courses.course as course, courses.ID_C as idC
FROM courses JOIN enrollments
ON courses.ID_C=enrollments.ID_C
WHERE '$id'=enrollments.ID_U ";
$result=$conn->query($sql);
$row=$result->fetch_array();
$_SESSION['courseId']=$row['idC'];
$_SESSION['code']=$row['code'];
$temp =$row['code'].'/'.$row['course'];
$_SESSION['course']=$temp;
//belum dimunculkan tulisannya
?>
