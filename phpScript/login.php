<?php
	include("connection.php");
	if(isset($_GET["submit"])){
		$user=$_GET["user"];
		$pass=$_GET["pass"];
		if(isset($user)&&$user!=""){
			if($conn->query("SELECT name FROM users WHERE name='$user'")){
				if($conn->query("SELECT pass FROM users WHERE pass='$pass'")){
					if($result=$conn->query("SELECT name FROM usergroups INNER JOIN usergroups on usergroups.ID_UG=users.ID_UG")){
						if($row=$result->fetch_array()){
							session_start();
							$_SESSION['name']=$name;
							$res=$conn->query("SELECT userID FROM users WHERE name='$user',pass='$pass' ");
							$row2=$res->fetch_array();
							$_SESSION['userID']=$row["userID"];
							if($row["name"]=="lecturer"){
								header("C:/xampp/htdocs/IDE/pages/lecturer/lct.php");
							}elseif($row["name"]=="student"){
									header("C:/xampp/htdocs/IDE/pages/student/std.php");
								}
							}
					}
				}else{
					echo "WRONG PASSWORD";
				}
			}else{
				echo "WRONG USERNAME";
			}

		}
	}
?>
