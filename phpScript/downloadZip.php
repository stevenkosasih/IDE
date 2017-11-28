<?php
include("connection.php");

$zip_file = '(path_of_the_zip)/filename.zip';

$dir = plugin_dir_path( __FILE__ );
$zip_file = $dir . '/filename.zip';
$zip = new ZipArchive();
if ( $zip->open($zip_file, ZipArchive::CREATE) !== TRUE) {
  exit("message");
}
$zip->addFile('full_path_of_the_file', 'custom_file_name');
$download_file = file_get_contents( $file_url );
$zip->addFromString(basename($file_url),$download_file);

$download_file = file_get_contents( $file_url );
$zip->addFromString(basename($file_url),$download_file);

// download zip file
header('Content-type: application/zip');
header('Content-Disposition: attachment; filename="'.basename($zip_file).'"');
header("Content-length: " . filesize($zip_file));
header("Pragma: no-cache");
header("Expires: 0");

ob_clean();
flush();
readfile($zip_file);
unlink($zip_file);
exit;




?>
