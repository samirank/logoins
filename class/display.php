<?php 

include_once ('config.php');
class display extends dbconnect {
  function __construct() {
    $connect      = new dbconnect();
    $this->mysqli = $connect->con();
  }

  //to display all contents from a table
  function display_all($tab){
  	$mysqli	= $this->mysqli;
    $sql	= "SELECT * FROM $tab";
    if ($val = $mysqli->query($sql)) return $val;
    else {
      echo $mysqli->error;
    }
  }
}
 ?>