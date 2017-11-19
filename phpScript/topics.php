<?php
// tampilan belum jelas
include_once("connection.php");
include_once("sessionStart.php");
include("courses.php");
//get topic
$sql="SELECT topic FROM activities JOIN courses
ON activities.ID_C=courses.ID_C WHERE courses.code='$_SESSION['courseCode']'";
$result=$conn->query($sql);
$row=mysqli_fetch_row($result);
//get asssigment and file
$sql2="SELECT actTypes FROM act_types";
$result2=$conn->query($sql2);
$row2=mysqli_fetch_row($result2);
//jika lecturer maka muncul add activity
if($_SESSION['role']=="lecturer"){
  ?><table>
    <td>
      <?php

      for ($i=0; $i<num_row($row) ; $i++) {
        ?>

        <tr>
          <!--munculin topic masih belum filenya-->
          <i class="fa fa-newspaper-o" aria-hidden="true"></i>
          <?php echo $row[$i];?>
          <!--munculin button modal add Activity-->
          <button name="addActivity">Add activity</button>
          <!-- The Modal -->
          <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2><b>Select Activity</b></h2>
              <form action="addingActivity.php" method="GET">
                <input type="radio" name="asssigment"><i class="fa fa-file-o" aria-hidden="true"></i>Assigment
                <input type="radio" name="file"><i class="fa fa-file-text-o" aria-hidden="true"></i>File
                <input type="submit" name="submit" value="Add">
              </form>
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
<?php
}else{ ?>
  <table>
    <td>
      <?php
      for ($i=0; $i<num_row($row) ; $i++) {
        ?>
        <tr>
          <i class="fa fa-newspaper-o" aria-hidden="true"></i>
          <?php echo $row[$i]; ?>

        </tr>
        <?php
      }?>
    </td>
  </table>
  <?php
}
}
?>
