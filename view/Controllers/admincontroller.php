<?php

  require_once '../Models/db_connect2.php';

if(isset($_POST["insertadmin"]))
  {
    insertadmin();
  }

  else if(isset($_POST["updateadmin"]))
  {
    adminupdate();
  }
  function insertadmin()
{
  $name=$_POST["adname"];
  $department=$_POST["addepartment"];
  $email=$_POST["ademail"];
  $mobile=$_POST["admobile"];
  $password=$_POST["adpassword"];


  $query="INSERT INTO `admin`( `adname`, `addepartment`, `ademail`, `admobile`, `adpassword`) VALUES ('$name','$department','$email','$mobile','$password')";
  
  echo $query;
execute($query);
header("Location:../admin.php");



  }
  function admininfo()
  {
   

  

    $query="SELECT * FROM admin";
    $product=get($query);
    return $product;




  }


  function adminupdate()
{
  $name=$_POST["name"];
  $sl=$_POST["sl"];
 
  $department=$_POST["department"];
  $email=$_POST["email"];
  $mobile=$_POST["mobile"];
  $password=$_POST["password"];
    
    $query="UPDATE `admin` SET `adname`='$name',`addepartment`='$department',`ademail`='$email',`admobile`='$mobile',`adpassword`='$password' WHERE `sl`='$sl'";
  //echo $query;
  //echo "1st working";
execute($query);





header("Location:../admin.php");



}
?>
