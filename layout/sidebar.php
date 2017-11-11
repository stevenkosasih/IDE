<!DOCTYPE html>
<html>
<head>
</head>

<body>
  <div id="sideDiv" name="sideDiv">
    <table id="side-table-info">
      <tr>
        You are logged in as
      </tr>
      <tr>
        <h5><b><?php echo $_SESSION['name']?></b></h5>
      </tr>
      <tr>
        <h4><b><?php echo $_SESSION['userID']?></b></h4>
        <hr>
      </tr>
      <tr>
        <img src="img/profile.png" id="profile-img">

      </tr>
      <tr>
        <table>
          <tr>
            <td class="icon"><i class="fa fa-home"></td>
              <td>HOME</td>
            </tr>
            <tr>
              <td class="icon"><i class="fa fa-list"></td>
                <td>MY COURSES</td>
              </tr>
              <tr>
                <td class="icon"><i class="fa fa-user"></td>
                  <td>MY PROFILE</td>
                </tr>
                <tr>
                  <td class="icon"><i class="fa fa-power-off"></td>
                    <td>LOG OUT</td>
                  </tr>
                </table>
              </tr>
            </table>
          </div>
        </body>
        </html>
