<?php
include('connection.php');

if (empty($_POST['username']) || empty($_POST['password'])) {
	header("Location: ../index.php");
}
else{

	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT username FROM users WHERE username = '$username'";
	$result = $conn->query($sql);
	if($result && $result->num_rows > 0){
		$sql = "SELECT username, pass FROM users WHERE username = '$username' AND pass= '$password'";
		$result = $conn->query($sql);
		if($result && $result->num_rows > 0){
			$sql = "SELECT users.username as username ,users.name as name, usergroups.name as position, users.userID as userid, users.ID_U as idU FROM users JOIN usergroups ON users.ID_UG=usergroups.ID_UG WHERE username = '$username' AND pass= '$password' ";
			$result = $conn->query($sql);
			if($result && $result->num_rows > 0){

				include("sessionStart.php");

				$row = $result->fetch_array();

				$_SESSION['username']=$row['username'];
				$_SESSION['role']=$row['position'];	
				$_SESSION['name']=$row['name'];
				$_SESSION['userid']=$row['userid'];
				$_SESSION['idU']=$row['idU'];
				$cookie_value=$_SESSION['username'];
				setcookie('username',$cookie_value,time()+(86400*30),"index.php");
				echo "berhasil";
				if($role == 'student'){
					header("Location: ../pages/student/std.php");
				}
				else{
					header("Location: ../pages/lecturer/lct.php");
				}
			}else{
				echo "fuck up";
			}
		}
		else{
			echo "WRONG PASSWORD";
		}
	}
	else{
		echo "WRONG USERNAME";
	}
}
?>
