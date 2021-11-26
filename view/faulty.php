<?php 

require_once ('Controllers/inventorycontroller.php');
$info=faulty();

$faulty="active";

include('header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          

          Modal Button

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Faulty Laptop</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
	  
	 <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">SN</th>
      <th scope="col">Laptop Model</th>
      <th scope="col">Serial Number</th>
      <th scope="col">Laptop ID</th>
      <th scope="col">Vendor</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                     
                        echo "<td>".$infos["sl"]."</td>";
						 echo "<td>".$infos["model"]."</td>";
						  echo "<td>".$infos["serial"]."</td>";
						   echo "<td>".$infos["assetid"]."</td>";
                      echo "<td>".$infos["vendor"]."</td>";
					   
            
            echo '<td><button class="btn btn-danger"><a href="Controllers/releasefaultylaptop.php?id='.$infos["sl"].'" i class="fa fa-trash" style="color:white">  Release</a></td>';
			
                    echo "</tr>";
                  }
                ?>
  </tbody>
</table>
	  
	  
	  
	  
	  
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php 


include('footer.php');
?>