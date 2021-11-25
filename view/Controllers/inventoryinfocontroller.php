<?php
$var;
  require_once '../Models/db_connect2.php';


  



  function patientdetails()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM patient WHERE username='$var'";
    $product=get($query);
    return $product[0];


  }







  ?>