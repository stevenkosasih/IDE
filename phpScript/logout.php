<?php
include("connection.php");
if($conn->close()){
  session_unset();
  session_destroy();
  include("../../index.php");
}else{
  echo "error";
}



?>
