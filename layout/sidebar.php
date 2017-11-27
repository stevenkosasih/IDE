<?php include("C:/xampp/htdocs/IDE/phpScript/connection.php");
include("C:/xampp/htdocs/IDE/phpScript/sessionStart.php");?>
<div style="position:absolute; width:20%; height:100%; background-color:lightgray">
	<div>
		<h5 class="w3-panel">You are logged in as</h5>
		<p class="w3-panel"><b><?php echo $_SESSION['userid'];?></b></p>
		<p class="w3-panel"><b><?php echo $_SESSION['name']?></b></p>
		<hr style="display:block; margin:0px; margin-left:10px; margin-right:10px; height:5px; background-color:#a6a6a6;">
	</div>
	<div style="margin-left:20px">
		<img src="../../img/profile.png" style="height:100px; width:100px;" class="w3-border w3-margin w3-padding">
	</div>
	<div class="w3-padding-left">
		<table style="margin-left:20px">
		<tr>
			<td style="width:50px"><a href="C:/xampp/htdocs/IDE/pages/lecturer/lct.php" ><i  class = "fa fa-home w3-padding" style="font-size:26px;"></i></td>
			<td><text style="font-size:20px;">HOME</text></a></td>
		</tr>
		<tr>
			<td style="width:50px"><a href=''><i  class = "fa fa-list w3-padding" style="font-size:26px;"></i></a></td>
			<td><text style="font-size:20px;">MY COURSES</text></td>
		</tr>
		<tr>
			<td style="width:50px"><a href="#" ><i  class = "fa fa-user w3-padding" style="font-size:26px;"></i></a></td>
			<td><text style="font-size:20px;">MY PROFILE</text></td>
		</tr>
		<tr>
			<td style="width:50px"><a href="/IDE/index.php"><i  class = "fa fa-power-off w3-padding" style="font-size:26px;"></i></a></td>
			<td><text style="font-size:20px;">LOG OUT</text></td>
		</tr>
		</table>
	</div>
</div>
