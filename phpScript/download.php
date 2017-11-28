<?php

include("connection.php");
$sql="SELECT * FROM activities where id=".$_REQUEST['title'];
$result=$conn->query($sql);
if ($row = mysql_fetch_assoc($data)) {

$filename = $row['filename']; $filetype = $row['filetype']; $filesize = $row['filesize']; }
header('Content-type: ' . $filetype); header('Content-length: ' . $filesize);
header("Content-Transfer-Encoding: binarynn"); header("Pragma: no-cache"); header("Expires: 0");
header('Content-Disposition: attachment; filename="' . $filename . '"');
echo $filedata; exit();
?>


?>
