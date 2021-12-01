<?php 

$dashboard="active";

include('header.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($query="SELECT count(sl) AS total FROM employee"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ao=$values["total"];

  if($Ao==0)
  {$Ao='No';}
  else {
    $Ao=$values["total"];
  }

}




if($query="SELECT count(sl) AS total FROM laptop"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $lt=$values["total"];

  if($lt==0)
  {$lt='No';}
  else {
    $lt=$values["total"];
  }

}




if($query="SELECT count(sl) AS total FROM admin"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $ad=$values["total"];


}

if($query="SELECT count(sl) AS total FROM laptop where status='Free'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $lnv=$values["total"];

  if($lnv==0)
  {$lnv='No';}
  else {
    $lnv=$values["total"];
  }

}


if($query="SELECT count(sl) AS total FROM laptop where status='Faulty'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $fal=$values["total"];

  if($fal==0)
  {$fal='No';}
  else {
    $fal=$values["total"];
  }

}

if($query="SELECT count(sl) AS total FROM laptop where Customization='yes'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $cus=$values["total"];

  if($cus==0)
  {$cus='No';}
  else {
    $cus=$values["total"];
  }

}



if($query="SELECT count(sl) AS total FROM laptop where status='Boocked'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $book=$values["total"];

  if($book==0)
  {$book='No';}
  else {
    $book=$values["total"];
  }

}





?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo $ad ; ?><sup style="font-size: 20px"></sup></h3>

                <p>Total Admin</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $Ao ; ?><sup style="font-size: 20px"></sup></h3>

                <p>Total Employees</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="employee.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $lt ; ?></h3>

                <p>Total Laptops</p>
              </div>
              <div class="icon">
                <i class="ion ion-laptop"></i>
              </div>
              <a href="laptop.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $lnv ; ?></h3>


                <p>Laptops In Stock</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="inventory.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            
            <!-- Again Smaill Boxes --->
            
            
          </div>
          <!-- ./col -->


       



          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $fal ; ?><sup style="font-size: 20px"></sup></h3>

                <p>Faulty Laptops</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="faulty.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $cus ; ?></h3>

                <p>Customized Laptops</p>
              </div>
              <div class="icon">
                <i class="ion ion-laptop"></i>
              </div>
              <a href="customize.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
		   <div class="col-lg-3 col-6">
		  <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $book ; ?></h3>

                <p>Laptops are Allocated to Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="allocate.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
			</div>
            <!-- Small Boxes End --->


        



          
          <!-- ./col -->
        </div>
		</div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php 


include('footer.php');
?>