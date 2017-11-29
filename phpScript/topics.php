<?php
// tampilan belum jelas
include_once("connection.php");

//get topic
//$id = $_SESSION['id'];
//echo print_r($_SESSION);
$code=$_SESSION['code'];
$sql="SELECT topic FROM activities JOIN courses ON activities.ID_C=courses.ID_C ";
$result=$conn->query($sql);

//jika lecturer maka muncul add activity
if($_SESSION['position']=="lecturer"){

	?>
	<table>
		<td>
			<?php while ($row=$result->fetch_array()) { ?>
				<tr>
					<div style="margin-left:22%">
						<div class="w3-panel w3-card-2" style="width:99%">
						<p name="topic" id="topic"><i class="fa fa-newspaper-o" aria-hidden="true"></i><?php $topic=$row["topic"]; echo " Topic ".$topic;?></p>
						<!-- munculin list file-->
						<?php $sql2="SELECT title,fileDir FROM activities JOIN courses
						ON activities.ID_C=courses.ID_C WHERE (courses.code='$code') AND (activities.topic='$topic') ";
						$result2=$conn->query($sql2);
						while($row2=$result2->fetch_array()){
							if(is_null($row2['fileDir'])==false&&is_null($row2['title'])==false){
								$path=$row["fileDir"];
								$title=$row["title"];?>
								<a href="download.php?id=<?php echo $title;?>"><?php echo $title ?></a>
								<?php
							}else{

							}
						}
						?>
						<button class="w3-button w3-black w3-margin" onclick="document.getElementById('actModal').style.display='block'">Add Activity</button>
							<div id="actModal" class="w3-modal">
								<div class="w3-modal-content w3-card-4 w3-animate-zoom w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border-black" style="max-width:35%">
									<div class="w3-center"><br>
										<span onclick="document.getElementById('actModal').style.display='none'" class="w3-button w3-x w3-hover-black w3-display-topright" title="Close Modal">&times;</span>
										<p class="w3-xlarge" style="float:left; margin:0px; margin-left:10px;">Select Activity</p>
									</div>
									<form class="w3-container" action="addingActivity.php" method="GET">
										<div class="w3-section w3-margin">
											<input class="w3-border-bottom w3-margin-bottom" type="radio" name="assignment"><i class="w3-padding fa fa-file-o" aria-hidden="true"></i>Assigment<br>
											<input class="w3-border-bottom" type="radio" name="file"><i class="w3-padding fa fa-file-o" aria-hidden="true"></i>File<br>
											<input type="submit" class="w3-button w3-black" style="margin-top:10px" value="Add" name="addActivity">
										</div>
									</form>
								</div>
							</div>
						</div>
						</div>
					</div>
				</tr>
				<?php
			}?>
		</td>
	</table>
	<script>
	var modal = document.getElementById('addActivity');

	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>
<?php }
else{ ?>
	<table>
		<td>
			<?php
			while ($row=$result->fetch_array()) {
				?>
				<tr>
					<tr>
						<div style="margin-left:22%">
							<div class="w3-panel w3-card-2" style="width:99%">
							<p name="topic" id="topic"><i class="fa fa-newspaper-o" aria-hidden="true"></i><?php $topic=$row["topic"]; echo " Topic ".$topic;?></p>
							<!-- munculin list file-->
							<?php $sql2="SELECT title,fileDir FROM activities JOIN courses
							ON activities.ID_C=courses.ID_C WHERE (courses.code='$code') AND (activities.topic='$topic') ";
							$result2=$conn->query($sql2);
							while($row2=$result2->fetch_array()){
								if(is_null($row2['fileDir'])==false&&is_null($row2['title'])==false){
									$path=$row["fileDir"];
									$title=$row["title"];?>
									<a href="download.php?id=<?php echo $title;?>"><?php echo $title ?></a>
									<?php
								}else{

								}
							}
							?>
							<button class="w3-button w3-black w3-margin" onclick="document.getElementById('submitModal').style.display='block'">Submit Answer</button>
								<div id="submitModal" class="w3-modal">
									<div class="w3-modal-content w3-card-4 w3-animate-zoom w3-leftbar w3-rightbar w3-topbar w3-bottombar w3-border-black" style="max-width:35%">
										<div class="w3-center"><br>
											<span onclick="document.getElementById('submitModal').style.display='none'" class="w3-button w3-x w3-hover-black w3-display-topright" title="Close Modal">&times;</span>
											<p class="w3-xlarge" style="float:left; margin:0px; margin-left:10px;">Submit</p>
										</div>
										<form class="w3-container" action="submitAnswerStd.php" method="GET">
											<div class="w3-section w3-margin">
												<input class="w3-input w3-border-bottom" type="file" name="inputFile" required>
												<input type="submit" class="w3-button w3-black" style="margin-top:10px" value="Add" name="submitAnswer">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</tr>
					<?php
				}?>
			</td>
		</table>
		<script>
		var modal = document.getElementById('submitAnswer');

		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
				</tr>
				<?php
			}?>
