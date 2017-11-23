<?php
include ("connection.php");
if(isset($_POST["submit"])){

	$user=$_POST["username"];
	$pass=$_POST["password"];

	if(isset($user)&&$user!=""){
		$sql="SELECT users.ID_U as id, users.username as username,
		users.pass as pass, users.userID as userid,
		users.name as name, usergroups.name as position
		FROM users JOIN usergroups
		ON users.ID_UG=usergroups.ID_UG
		WHERE users.username='$user'";


		//coba data dari $sql apakah connect tidak berdasarkan username

		if($result=$conn->query($sql)){

			if($row=$result->fetch_array()){

				if(isset($pass)&&$pass!=""){

					if($pass==$row["pass"]){

						include("sessionStart.php");

						$_SESSION["name"]=$row["name"];
						$_SESSION["userid"]=$row["userid"];
						$_SESSION["idU"]=$row['id'];
						$_SESSION["role"]=$row["position"];

						$cookie_value=$row['username'];
						setcookie('username',$cookie_value,time()+(86400*30),"index.php");
						if($row["position"]=="lecturer"){
							header("Location:/IDE/pages/lecturer/lct.php");
							

						}elseif($row["position"]=="student"){
							header("Location:/IDE/pages/student/std.php");
						}

					}else{
						echo "wrong password";
					}
				}
			}
		}else{
			echo "wrong username";
		}
	}
}
?>
