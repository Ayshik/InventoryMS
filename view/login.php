
<?php



session_start();

require "../Models/db_connect.php";
global $con;
$eror= "top";
$uname="";
$err_uname="";
$psw="";
$err_psw="";
$err_invalid="";
$has_error=false;


if($_SERVER["REQUEST_METHOD"]=="POST"){


  if(empty($_POST['uname']))
  {
    $err_uname="*Email Required";
    $has_error=true;


  }
  else
  {
    $uname=$_POST['uname'];
  }
  if(empty($_POST['psw']))
  {
    $err_psw="*Password Required";
    $has_error=true;


  }
  else
  {
    $psw=$_POST['psw'];
  }
  if(!$has_error)
  {
    $query = "SELECT ademail from admin where ademail='$uname' and adpassword='$psw'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0)
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION["loggedinuser"]=$row["ademail"];

      header("Location:index.php");
    }
    else
    {
$eror = "error";
    }
  }


}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>IPDC</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="uname"placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
		  <td><span> <?php echo $err_uname;?></span></td>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"name="psw" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
		 <td><span><?php echo $err_psw;?></span></td> 
          <!-- /.col -->
          <center>
          <div class="col-4">
            
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        </center>
      </form>
</body>
</html>
<script>
                      var er = "no";
                      er = "<?php echo $eror; ?>";
                      console.log(er);
                      if(er=="error"){
                        swal({
                        title: "SORRY!",
                        text: "Please check your Email & Password!",
                        icon: "error",
                        button: "OK",
                      });
                      er ="no";
                      }
                    </script>