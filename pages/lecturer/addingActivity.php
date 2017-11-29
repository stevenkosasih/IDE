<?php
include("../../phpScript/connection.php");
include("../../phpScript/sessionStart.php");

if(isset($_GET["addActivity"])){

  $activityType="";
  $activityType=$_GET['myRadio'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <?php
  include("../../layout/style.php");
include("../../layout/header.php");
//include("../../layout/sidebar.php");
  ?>
</head>
<body>
  <div name="heading">
    Adding a new assignment
<?php echo print_r($_SESSION);?>
  </div>
  <div name="Activity" style="overflow:scroll; height:100%">
    <!-- collapseAll klo diklick jadi expand All-->
    <button name="collapseAll" onclick="CollapseAll()">Collapse All</button>
    <form action="course.php" name="courseForm">
      <fieldset>
        <legend><button name="general" data-toggle="collapse" data-target="generalDiv">General</button></legend>
        <div id="generalDiv">
          Name <input type="text" name="courseTitle"><br>
          Description <textarea name="courseDescription" form="courseForm"></textarea>
        </div>
      </fieldset>
      <?php if($activityType!="file"){
        echo "<fieldset>
        <legend><button name='availability' data-toggle='collapse' data-target='availDiv'>Availability</button></legend>
        <div id='contentDiv'>
        Allow submission from <input type='date' name='fromDate' placeholder='mm/dd/yyyy' <input type='checkbox' name='enableFrom'><br>
        Due date <input type='date' name='dueDate' placeholder='mm/dd/yyyy'><input type='checkbox' name='enableDue'><br>
        </div>
        </fieldset> ";
      }
      ?>
      <fieldset>
        <legend><button name="content" data-toggle="collapse" data-target="contentDiv">Content</button></legend>
        <input type="file" name="fileInput">
      </fieldset>
      <input type="submit" name="save" value="SAVE AND RETURN TO COURSE">
      <input type="submit" name="cancel" value="CANCEL">
    </form>
  </div>
</body>
<script>
function CollapseAll(){
  var x = document.getElementById('contentDiv');
  if (x.className.indexOf("w3-hide") == -1) {
    x.className += " w3-hide";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
  var x = document.getElementById('generalDiv');
  if (x.className.indexOf("w3-hide") == -1) {
    x.className += " w3-hide";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
  return false;
}
</script>
</html>
