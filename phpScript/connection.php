<?php
	$mysqli=new mysqli("localhost","root","","ide");
	if($mysqli->connect_errno){
		die('Connect Error:'.$conn->connect_errno);
	}
?>