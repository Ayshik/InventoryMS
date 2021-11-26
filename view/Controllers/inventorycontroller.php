<?php
$var;
  require_once '../Models/db_connect2.php';

if(isset($_POST["update"]))
  {
    updateinventory();
  }
  
  if(isset($_POST["laptopupdate"]))
  {
    laptopupdate();
  }
  function updateinventory()
{ 
  $name=$_POST["name"];
  $sl=$_POST["sl"];
  $id=$_POST["id"];
  $designation=$_POST["designation"];
  $department=$_POST["department"];
  $laptop=$_POST["laptop"];
  $prev=$_POST["ihh"];
 
if($laptop=='No' || $laptop==$prev)
{
  $query="UPDATE `employee` SET `name`='$name',`id`='$id',`department`='$department',`designation`='$designation',`laptop`='$laptop' where sl='$sl'";
 
  echo $query;
execute($query);
}
else
{

//echo "else kaj kore";


$query="UPDATE `employee` SET `name`='$name',`id`='$id',`department`='$department',`designation`='$designation',`laptop`='$laptop' where sl='$sl'";
  $query2="INSERT INTO `allocation`( `name`, `employeeid`, `department`,`assetid`) VALUES ('$name','$id','$department','$laptop')";
  $query3="UPDATE `laptop` SET `status`='Boocked' where assetid='$laptop'";
 
execute($query);
execute($query2);
execute($query3);



}
header("Location:../employee.php");




}

function faulty()
{
 



  $query="SELECT * FROM laptop WHERE Status='Faulty'";
  $product=get($query);
  return $product;


}
function laptopupdate()
{
  $assetid=$_POST["lassetid"];
  $sl=$_POST["sl"];
  $dsn=$_POST["ldsn"];
  $laptopusername=$_POST["lusername"];
  $hostname=$_POST["lhostname"];
  $ip=$_POST["lip"];
  $domain=$_POST["ldomain"];
  $oskey=$_POST["loskey"];
  $osversion=$_POST["losversion"];
  $ram=$_POST["lram"];
  $hdd=$_POST["lhdd"];

  $query="UPDATE `laptop` SET `assetid`='$assetid',`dsn`='$dsn',`laptopusername`='$laptopusername',`hostname`='$hostname',`ip`='$ip',`domain`='$domain',`oskey`='$oskey',`osversion`='$osversion',`ram`='$ram',`hdd`='$hdd',`Customization`='yes' WHERE sl='$sl'";
  //echo $query;
execute($query);
header("Location:../laptop.php");



}

function customizeinfo()
{
 



  $query="SELECT * FROM laptop WHERE Customization='yes'";
  $product=get($query);
  return $product;


}


function invoiceinfo()
{
 



  $query="SELECT * FROM laptop";
  $product=get($query);
  return $product;


}



function history()
{
 



  $query="SELECT * FROM history";
  $product=get($query);
  return $product;


}
  ?>