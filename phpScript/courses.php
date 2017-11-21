<?php
include("connection.php");
$idU=$_SESSION['idU'];
$sql="SELECT courses.code as code,courses.course as course, courses.ID_C as idC
FROM courses JOIN enrollments
ON courses.ID_C=enrollments.ID_C
WHERE enrollments.ID_U='$idU'";
$result=$conn->query($sql);
$row=$result->fetch_array();
$_SESSION['course']=$row['course'];
$_SESSION['idC']=$row['idC'];
$_SESSION['code']=$row['code'];
?>
