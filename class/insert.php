<?php 

include_once ('config.php');
class insert extends dbconnect {
  function __construct() {
    $connect      = new dbconnect();
    $this->mysqli = $connect->con();
  }



  function new_file($url){
  	$mysqli	=	$this->mysqli;
  	if ($mysqli->query("INSERT into files (url) values ('$url')")) {
  		return 1;
  	}else{
  		echo $mysqli->error;
  	}
  }


}

 ?>