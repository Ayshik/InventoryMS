<?php

  require_once '../Models/db_connect2.php';

$query ="Delete from employee where sl='$_GET[id]'";
$query2 ="INSERT INTO `history`(`sl`, `name`, `employeeid`, `department`, `assetid`) VALUES ('$_GET[id]','$_GET[name]','$_GET[eid]','$_GET[dep]','$_GET[essetid]')";
  execute($query);
  execute($query2);
  //echo $query2;
	header("Location:../employee.php");




  ?>
