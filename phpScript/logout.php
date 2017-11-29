<?php
	include('sessionStart.php');
	session_unset();
	session_destroy();
	header("Location:../index.php");
?>
