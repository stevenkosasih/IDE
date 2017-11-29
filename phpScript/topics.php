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
						<i class="fa fa-newspaper-o" aria-hidden="true"></i>
						<p name="topic" id="topic"><?php $topic=$row["topic"]; echo "topic ".$topic;?></p>
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


						<!--munculin button modal add Activity-->
						<button name="addActivity">Add activity</button>
						<!-- The Modal -->
						<div id="myModal" class="modal">

							<!-- Modal content -->
							<div class="w3-modal">
								<span class="close">&times;</span>
								<h2><b>Select Activity</b></h2>
								<form action="addingActivity.php" method="GET">
									<input type="radio" name="assignment"><i class="fa fa-file-o" aria-hidden="true"></i>Assigment
									<input type="radio" name="file"><i class="fa fa-file-text-o" aria-hidden="true"></i>File
									<input type="submit" name="addActivity" value="Add">
								</form>
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
							<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<p name="topic" id="topic"><?php $topic=$row["topic"]; echo "topic ".$topic;?></p>
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


							<!--munculin button modal add Activity-->
							<button name="submitAnswer">Submit Answer</button>
							<!-- The Modal -->
							<div id="myModal" class="modal">

								<!-- Modal content -->
								<div class="w3-modal">
									<span class="close">&times;</span>
									<h2><b>S</b></h2>
									<form action="submitAnswerStd.php" method="GET">

										<input type="submit" name="submitAnswer" value="Add">
									</form>
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
