<?php 
include('../class/insert.php');
$insert = new insert();
for ($i=1; $i <= 1015; $i++) {
	$url = "files/logo (".$i.").png";
	$insert->new_file($url);
}
echo $i." files inserted";

 ?>