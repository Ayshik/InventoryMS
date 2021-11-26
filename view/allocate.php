<?php 
require_once ('Controllers/employeecontroller.php');
$info=getalocated();


$allocate="active";

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
              <li class="breadcrumb-item active">Allocation</li>
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
      <th scope="col">Employee Name</th>
      <th scope="col">Employee ID</th>
      <th scope="col">Department</th>
     
      <th scope="col">Laptop ID</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                     
                        echo "<td>".$infos["sl"]."</td>";

						 echo "<td>".$infos["name"]."</td>";
             echo "<td>".$infos["employeeid"]."</td>";
						  echo "<td>".$infos["department"]."</td>";
						 
                      
					   echo "<td>".$infos["assetid"]."</td>";
					  
             echo '<td><button class="btn btn-warning"><a href="Controllers/faulty.php?id='.$infos["assetid"].'&amp;eid='.$infos["employeeid"].'" i class="fa fa-trash" style="color:white">  Faulty</a></td>';

            echo '<td><button class="btn btn-danger"><a href="Controllers/laptoprelease.php?id='.$infos["assetid"].'&amp;eid='.$infos["employeeid"].'" i class="fa fa-trash" style="color:white">  Release</a></td>';
			
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