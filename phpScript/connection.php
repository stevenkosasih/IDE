<?php
	$conn=new mysqli("localhost","root","","ide");
	if($conn->connect_errno){
		die('Connect Error:'.$conn->connect_errno);
	}


?>
