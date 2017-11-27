<?php
include("connection.php");
$activityType=$_POST['radio'];
$coursecode=$_SESSION['code'];
$sql="";
$fromDate="";
$dueDate="";

if(isset($_POST['submit'])){
	$title=$_POST['courseTitle'];
	$description=$_POST['courseDescription'];
	if($activityType=="assignment"){
		$target_dir="/upload/assigment/".$coursecode;
		if(!file_exist($target_dir)){
		if(mkdir($target_dir)){
			echo "success creating".$target_dir;
		}else{
			echo "fail creating".$target_dir;
		}
		}
		if(isset($_POST['fromDate'])&&isset($_POST['dsueDate'])){
		$fromDate=$_POST['fromDate'];
		$dueDate=$_POST['dueDate'];
		}

	}else{
		$target_dir="/upload/file/".$coursecode;
		if(!file_exist($target_dir)){
		if(mkdir($target_dir)){
			echo "success creating ".$target_dir;
		}else{
			echo "fail creating".$target_dir;
		}
		}

	}
	$target_file=$target_dir.basename($_FILES["fileInput"]["name"]);
	if(move_uploaded_file($_FILES["fileInput"]["tmp_name"],$target_file)){
		echo "the file".basename($_FILES["fileInput"]["name"])."has been uploaded";
	}else{
		echo "failed to upload file";
	}
	$sql="INSERT INTO activities(dateOpen,dateClose,title,description,fileDir) values ('$fromDate','$dueDate','$title','$description','$target_file') ";
	if($conn->query($sql)){
	echo "success inserting";
	}else{
	echo "failed inserting";
	}
}
?>
