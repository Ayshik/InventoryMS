<?php

  require_once '../Models/db_connect2.php';

$query ="update laptop set status='Free',location='IPDC-HQ',designation='Not-Assigned',department='Not-Assigned' where sl='$_GET[id]'";
//echo $query;
  execute($query);
	header("Location:../faulty.php");




  ?>
