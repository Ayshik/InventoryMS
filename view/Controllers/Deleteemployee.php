<?php

  require_once '../Models/db_connect2.php';

$query ="Delete from employee where sl='$_GET[id]'";
  execute($query);
	header("Location:../employee.php");




  ?>
