<?php

  require_once '../Models/db_connect2.php';

if(isset($_POST["insertemp"]))
  {
    insertemp();
  }

if(isset($_POST["insertlaptop"]))
  {
    insertlaptop();
  }

  function insertemp()
{
  $name=$_POST["name"];
  $id=$_POST["id"];
  $designation=$_POST["designation"];
  $department=$_POST["department"];
  $location=$_POST["location"];
  $laptop=$_POST["laptop"];
  $mouse=$_POST["mouse"];
    $bag=$_POST["bag"];
if($laptop=='No')
{
  $query="INSERT INTO `employee`(`sl`, `name`, `id`, `department`, `designation`, `laptop`, `bag`, `mouse`,`location`) VALUES ('','$name','$id','$designation','$department','$laptop','$mouse','$bag','$location')";
  
  //echo $query;
execute($query);
}
else 
{




  $query="INSERT INTO `employee`(`sl`, `name`, `id`, `department`, `designation`, `laptop`, `bag`, `mouse`,`location`) VALUES ('','$name','$id','$designation','$department','$laptop','$mouse','$bag','$location')";
  $query2="INSERT INTO `allocation`( `name`, `employeeid`, `department`,`assetid`) VALUES ('$name','$id','$department','$laptop')";
  //echo $query;
 
  $query3="UPDATE `laptop` SET `status`='Boocked' where assetid='$laptop'";
execute($query);
execute($query2);
execute($query3);


}
header("Location:../employee.php");



}
  function getemployee()
  {
   

  

    $query="SELECT * FROM employee";
    $product=get($query);
    return $product;


  }

 function insertlaptop()
{
  $assetid=$_POST["assetid"];
  $model=$_POST["model"];
  $serial=$_POST["serial"];
 
  $laptopusername=$_POST["laptopusername"];
  $maker=$_POST["maker"];
  $hostname=$_POST["hostname"];
  $ip=$_POST["ip"];
  $domain=$_POST["domain"];
  $cpu=$_POST["cpu"];
  $oskey=$_POST["oskey"];
  $osversion=$_POST["osversion"];
  $vendor=$_POST["vendor"];
  $procrumentref=$_POST["procrumentref"];
  $ram=$_POST["ram"];
  $hdd=$_POST["hdd"];
  $ssd=$_POST["ssd"];
  $warranty=$_POST["warranty"];
  $deleverydate=$_POST["deleverydate"];
  $procurementdate=$_POST["procurementdate"];

  $query="INSERT INTO `laptop`(`assetid`, `model`, `laptopusername`, `maker`, `hostname`, `ip`, `domain`, `cpu`, `oskey`, `osversion`, `vendor`, `procrumentref`, `ram`, `hdd`, `warranty`, `deleverydate`, `procurementdate`,`status`,`Customization`,`serial`,`ssd`) VALUES ('$assetid','$model','$laptopusername','$maker','$hostname','$ip','$domain','$cpu','$oskey','$osversion','$vendor','$procrumentref','$ram','$hdd','$warranty','$deleverydate','$procurementdate','Free','no','$serial','$ssd')";
  //echo $query;
execute($query);
header("Location:../laptop.php");



}


function getlaptop()
  {
   

  

    $query="SELECT * FROM laptop";
    $product=get($query);
    return $product;


  }

  function getlaptopfree()
  {
   

  

    $query="SELECT * FROM laptop where status='free'";
    $product=get($query);
    return $product;


  }

  function getalocated()
  {
   

  

    $query="SELECT * FROM allocation";
   
    $product=get($query);
    return $product;


  }
?>
