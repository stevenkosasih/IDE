<?php
require "connection.php";
if(isset($_POST["submit"])){
	$user=$_POST["user"];
	$pass=$_POST["pass"];

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
				echo "success 1";
				if(isset($pass)&&$pass!=""){
					echo "scuces 2";
					if($pass==$row["pass"]){
						echo "suscee 3";
						require "startSession.php";
						$_SESSION['username']=$row["username"];
						$_SESSION['userid']=$row["userid"];
						if($row["position"]=="lecturer"){
							echo $row["position"];
							if(header("Location:/IDE/pages/lecturer/lct.php")){
								echo "sucess 5";
							}else{
								echo "total failed";
							}
						}elseif($row["position"]=="student"){
							header("/IDE/pages/student/std.php");
						}

					}
				}
			}

			//cek password

		}else{
			echo "password is wrong";
		}
	}else{
		echo "username is wrong";
	}


}else{
	echo "no life";
}


?>
