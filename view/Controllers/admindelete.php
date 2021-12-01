<?php

  require_once '../Models/db_connect2.php';

$query ="Delete from admin where sl='$_GET[id]'";

  execute($query);

  //echo $query2;
	header("Location:../admin.php");




  ?>
