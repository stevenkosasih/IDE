<?php
include("connection.php");
<<<<<<< HEAD
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
=======
$id=$_SESSION['idU'];
$sql="SELECT courses.code+'/'+courses.course as course, courses.ID_C as idC
FROM courses JOIN enrollments
ON courses.ID_C=enrollments.ID_C
WHERE '$id'=enrollements.ID_U ";
$result=$conn->query($sql);
$row=$result->fetch_array();
$_SESSION['courseCode']=$row['code'];
$_SESSION['course']=$row['course'];
>>>>>>> 1cd174d97274494585b511576c5c1f78a7852468
?>
