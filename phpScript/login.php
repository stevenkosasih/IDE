<?php
include('connection.php');

if (empty($_POST['username']) || empty($_POST['password'])) {
	header("Location: ../index.php");
}
else{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT username FROM users WHERE username = '$username'";
	$result = $mysqli->query($sql);
	if($result && $result->num_rows > 0){
		$sql = "SELECT username, pass FROM users WHERE username = '$username' AND pass= '$password'";
		$result = $mysqli->query($sql);
		if($result && $result->num_rows > 0){
			$sql = "SELECT usergroups.name as name, users.userID as userid, users.ID_U as idU FROM users JOIN usergroups WHERE username = '$username' AND pass= '$password' ON users.ID_UG = usergroups.ID_UG";
			$result = $mysqli->query($sql);
			if($result && $result->num_rows > 0){
				include("sessionStart.php");

				$row = $result->fetch_array();
				$role = $row['name'];
				$_SESSION['user']=$row['username'];
				$_SESSION['role']=$role;
				$_SESSION['userid']=$row['userid'];
				$_SESSION['idU']=$row['idU'];

				setcookie('username',$cookie_value,time()+(86400*30),"index.php");
				if($role == 'student'){
					header("Location: ../pages/student/std.php");
				}
				else{
					header("Location: ../pages/lecturer/lct.php");
				}
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
