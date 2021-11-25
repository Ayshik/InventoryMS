<?php
require_once ('Controllers/employeecontroller.php');
$info=getemployee();

$employee="active";

include('header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add a New Employee
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Employee Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<form action="Controllers/employeecontroller.php" method="post">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" name="name" placeholder="Enter Name" id="name" required>
  </div>
  <div class="form-group">
    <label for="id">ID:</label>
    <input type="id" class="form-control" name="id" placeholder="Enter ID" id="id" required>
  </div>
  <div class="form-group">
    <label for="designation">Designation:</label>
    <input type="designation" class="form-control" name="designation" placeholder="Enter Designation" id="designation" required>
  </div>
  <div class="form-group">
    <label for="department">Department:</label>
    <input type="department" class="form-control" placeholder="Enter Department" name="department" required>
  </div>
  <div class="form-group">
    <label for="text">Laptop Number:</label>
    <input type="text" class="form-control" placeholder="Enter Laptop Number" name="laptop" required>
  </div>
  <input type="checkbox" id="vehicle1" name="mouse" value="yes">
<label for="vehicle1"> Mouse</label><br>
<input type="checkbox" id="vehicle2" name="bag" value="yes">
<label for="vehicle2"> Bag</label>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="insertemp" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>


          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
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
      <th scope="col">Name</th>
      <th scope="col">ID</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>

      <th scope="col">Laptop</th>
      <th scope="col">Bag</th>
      <th scope="col">Mouse</th>
      <th scope="col"></th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
     <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                     
                        echo "<td>".$infos["sl"]."</td>";
						 echo "<td>".$infos["name"]."</td>";
						  echo "<td>".$infos["id"]."</td>";
						   echo "<td>".$infos["department"]."</td>";
                      echo "<td>".$infos["designation"]."</td>";
					   echo "<td>".$infos["laptop"]."</td>";
					  
					   echo "<td>".$infos["bag"]."</td>";
					    echo "<td>".$infos["mouse"]."</td>";
            
 echo '<td><button class="btn btn-success"><a href="Controllers/editemployee.php?id='.$infos["sl"].'" i class="fa fa-pen" style="color:white">  Edit</a></td>';
            echo '<td><button class="btn btn-danger"><a href="Controllers/Deleteemployee.php?id='.$infos["sl"].'" i class="fa fa-trash" style="color:white">  Release</a></td>';
			
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
