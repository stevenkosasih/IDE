<?php
include("connection.php");
include("sessionStart.php");

$id = $_SESSION['id'];
$sql = "SELECT courses.code as courseCode,courses.course as courseName, courses.ID_C as id FROM courses JOIN enrollments ON courses.ID_C = enrollments.ID_C WHERE $id = enrollments.ID_U;";
$result = $conn->query($sql);
if(isset($_SESSION['id'])){

?>
<div class="w3-panel w3-card-2" style="margin-left:20%; margin-top:0; background-color:gray"><p>COURSE OVERVIEW</p></div>

<?php
if($result && $result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		$courseID = $row["id"];
		$course = $row["courseName"];
		$courseCode =  $row["courseCode"];
?>
	<div class="w3-panel w3-card-2" style="margin-left:20%"><a href="<?php echo "course.php?id=".$courseID."&courseTitle=".$course ?>" style = "text-decoration: none;"><p><?php echo "$courseCode"." / "."$course"?></p></a></div><?php
	}
}
}
?>
