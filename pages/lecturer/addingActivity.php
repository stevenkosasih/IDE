<?php
include("C:/xampp/htdocs/IDE/phpScript/connection.php");

if(isset($_POST["addActivity"])){
  $activityType="";
  $activityType=$_POST['radio'];

}
?>

<!DOCTYPE html>

<html>
<head>
  <?php include("../../layout/style.php");
  ?>
</head>
<body>
  <div name="heading">
    Adding a new assignment
  </div>
<!-- tambahkan style di div ini supaya bisa scroll , pake overflow-->
<div name="scrollableDiv">
<!-- collapseAll klo diklick jadi expand All-->
  <button name="collapseAll" >Collapse All</button>
  <form action="course.php" name="courseForm">
    <fieldset>
      <legend><button name="general" data-toggle="collapse" data-target="generalDiv">General</button></legend>
      <div name="generalDiv">
        Name <input type="text" name="courseTitle"><br>
        Description <textarea name="courseDescription" form="courseForm"></textarea>
        </div>
      </fieldset>
      <?php if($activityType!=""){
        echo "<fieldset>
        <legend><button name='availability' data-toggle='collapse' data-target='availDiv'>Availability</button></legend>
        <div name='contentDiv'>
        Allow submission from <input type='time' name='fromDate' placeholder='mm/dd/yyyy' <input type='checkbox' name='enableFrom'><br>
        Due date <input type='time' name='dueDate' placeholder='mm/dd/yyyy'><input type='checkbox' name='enableDue'><br>
        </div>
        </fieldset> ";
      }
      ?>

      <fieldset>
        <legend><button name="content" data-toggle="collapse" data-target="contentDiv">Content</button></legend>
        <input type="file" name="fileInput">

      </fieldset>
      <input type="submit" name="SAVE AND RETURN TO COURSE">
      <input type="submit" name="CANCEL">

    </form>
</div>
  </body>
  <script>
  //script untuk collapse all
  //script untuk enable
</script>

</html>
