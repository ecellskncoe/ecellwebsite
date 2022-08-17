<?php 
if(isset($_GET['download']))
$file_name = $_GET['download'];
$file_url = 'C:/xampp/htdocs/qrcode/userQr/' . $file_name;
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"".$file_name."\""); 
readfile($file_url);
exit;
# http://developerravi.com/practice/day2/qr
?>