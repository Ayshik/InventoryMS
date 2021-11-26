<?php

  require_once '../Models/db_connect2.php';

$query ="update laptop set status='Free' where assetid='$_GET[id]'";
$query2 ="Delete from allocation where assetid='$_GET[id]'";
$query3 ="update employee set laptop='No' where id='$_GET[eid]'";
//echo $query;
  execute($query);
  execute($query2);
  execute($query3);
	header("Location:../allocate.php");




  ?>
