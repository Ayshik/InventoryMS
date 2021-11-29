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
  $alaptop=$_POST["alaptop"];
  $location=$_POST["elocation"];
  $prev=$_POST["ihh"];
 
if($laptop=='No' || $laptop==$prev)
{
  $query="UPDATE `employee` SET `name`='$name',`id`='$id',`location`='$location',`department`='$department',`designation`='$designation',`laptop`='$alaptop' where sl='$sl'";
 
 // echo $query;
execute($query);
}
else
{

//echo "else kaj kore";


$query="UPDATE `employee` SET `name`='$name',`id`='$id',`location`='$location',`department`='$department',`designation`='$designation',`laptop`='$laptop' where sl='$sl'";
  $query2="INSERT INTO `allocation`( `name`, `employeeid`, `department`,`assetid`) VALUES ('$name','$id','$department','$laptop')";
  $query3="UPDATE `laptop` SET `status`='Boocked' ,`designation`='$designation',`department`='$department',`location`='$location'where assetid='$laptop'";
 
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
 
  $laptopusername=$_POST["lusername"];
  $hostname=$_POST["lhostname"];
  $ip=$_POST["lip"];
  $domain=$_POST["ldomain"];
  $oskey=$_POST["loskey"];
  $osversion=$_POST["losversion"];
  $ram=$_POST["lram"];
  $ssd=$_POST["lssd"];
  $hdd=$_POST["lhdd"];




  $hassetid=$_POST["lassetid"];
  $hlaptopusername=$_POST["husername"];
  $hhostname=$_POST["hhostname"];
  $hip=$_POST["hip"];
  $hdomain=$_POST["hdomain"];
  $hoskey=$_POST["hoskey"];
  $hosversion=$_POST["hosversion"];
  $hram=$_POST["hram"];
  $hssd=$_POST["hssd"];
  $hhdd=$_POST["hhdd"];
if($hlaptopusername==$laptopusername  && $assetid==$hassetid && $hostname==$hhostname && $ip== $hip && $domain== $hdomain && $oskey== $hoskey && $osversion== $hosversion && $ram== $hram && $ssd== $hssd && $hdd== $hhdd)
  {
    
    
    $query="UPDATE `laptop` SET `assetid`='$assetid',`laptopusername`='$laptopusername',`hostname`='$hostname',`ip`='$ip',`ssd`='$ssd',`domain`='$domain',`oskey`='$oskey',`osversion`='$osversion',`ram`='$ram',`hdd`='$hdd' WHERE sl='$sl'";
  //echo $query;
  echo "1st working";
execute($query);

}

else if($hlaptopusername!=$laptopusername  && $assetid==$hassetid && $hostname==$hhostname && $ip== $hip && $domain== $hdomain && $oskey== $hoskey && $osversion== $hosversion && $ram== $hram && $ssd== $hssd && $hdd== $hhdd)
{
  $query="UPDATE `laptop` SET `assetid`='$assetid',`laptopusername`='$laptopusername',`hostname`='$hostname',`ip`='$ip',`ssd`='$ssd',`domain`='$domain',`oskey`='$oskey',`osversion`='$osversion',`ram`='$ram',`hdd`='$hdd' WHERE sl='$sl'";
  //echo $query;
 // echo "n loop working";
execute($query);
}
else{

  $query2="UPDATE `laptop` SET `assetid`='$assetid',`laptopusername`='$laptopusername',`hostname`='$hostname',`ip`='$ip',`ssd`='$ssd',`domain`='$domain',`oskey`='$oskey',`osversion`='$osversion',`ram`='$ram',`hdd`='$hdd',`Customization`='yes' WHERE sl='$sl'";
 // echo "else working";
execute($query2);

}


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