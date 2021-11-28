<?php
require_once ('Controllers/employeecontroller.php');
$info=getemployee();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);





    $query = "SELECT * from laptop where status='Free'";
    $result1 = mysqli_query($conn, $query);
	$result2 = mysqli_query($conn, $query);
	 $options="";
  while ($row2=mysqli_fetch_array($result2))
  {
   $options=$options."<option>$row2[1]</option>";
	
    
   
  


  }
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

<!-- Add employee -->
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
    <label for="id">Employee ID:</label>
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
    <label for="department">Location:</label>
    <input type="location" class="form-control" placeholder="Enter Location" name="location" required>
  </div>
  <div class="form-group">
  <label for="department">Laptop ID:</label>
  <select  class="form-control" name="laptop">
  <option value="No">Null</option>
  <?php while($row1=mysqli_fetch_array($result1));?>
    <?php echo $options;?>
  
  
  </select>
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















<!-- this is for update -->
<div class="modal fade" id="updatepanel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Employee Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<form action="Controllers/inventorycontroller.php" method="post">
  <div class="form-group">
  <input type="hidden" class="form-control" id="sl" name="sl" placeholder="Enter Name" required>
    <label for="name">Name:</label>
    <input type="name" class="form-control" id="ename" name="name" placeholder="Enter Name" required>
  </div>
  <div class="form-group">
    <label for="id">Employee ID:</label>
    <input type="id" class="form-control" name="id" placeholder="Enter ID" id="eid" required>
  </div>
  <div class="form-group">
    <label for="designation">Designation:</label>
    <input type="designation" class="form-control" name="designation" placeholder="Enter Designation" id="edesignation" required>
  </div>
  <div class="form-group">
    <label for="department">Department:</label>
    <input type="department" class="form-control" placeholder="Enter Department" name="department" id="edepartment" required>
  </div>
  <div class="form-group">
    <label for="department">Location:</label>
    <input type="location" class="form-control" placeholder="Enter Location" name="location" id="elocation" required>
  </div>

  <div class="form-group">
    <label for="designation">Assigned Laptop:</label>
    <input type="designation" class="form-control" name="alaptop" placeholder="Enter Designation" id="elaptop" readonly>
  </div>
  <input type="hidden" class="form-control" placeholder="Enter Department" name="ihh" id="ihh" value="" required>
  <div class="form-group">
  <label for="department">Laptop ID:</label>
  <select  class="form-control" name="laptop">
 
  <option value="No">Null</option>
  <?php while($row1=mysqli_fetch_array($result1));?>
    <?php echo $options;?>
  
  
  </select>
  </div>
 



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End update -->





















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
      <th scope="col">Employee ID</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
      <th scope="col">Location</th>
      <th scope="col">Laptop ID</th>
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
                        echo "<td>".$infos["location"]."</td>";
                        echo "<td>".$infos["laptop"]."</td>";
                        echo "<td>".$infos["bag"]."</td>";
                        echo "<td>".$infos["mouse"]."</td>";
            
 echo '<td><button class="btn btn-success editbutton" data-toggle="modal" name="editbutton"  ><a  i class="fa fa-pen" style="color:white">  Edit</a></td>';
            echo '<td><button class="btn btn-danger"><a href="Controllers/Deleteemployee.php?id='.$infos["sl"].'&amp;eid='.$infos["id"].'&amp;dep='.$infos["department"].'&amp;des='.$infos["designation"].'&amp;essetid='.$infos["laptop"].'&amp;name='.$infos["name"].'" i class="fa fa-trash" style="color:white">  Release</a></td>';
			
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
<script>
$(document).ready(function(){

$('.editbutton').on('click',function(){


$('#updatepanel').modal('show');

$tr=$(this).closest('tr');
var data=$tr.children("td").map(function(){
return $(this).text();
}).get();
console.log(data);
$('#sl').val(data[0]);
$('#ename').val(data[1]);
$('#eid').val(data[2]);
$('#edesignation').val(data[3]);
$('#edepartment').val(data[4]);
$('#elocation').val(data[4]);
$('#elaptop').val(data[5]);
$('#ihh').val(data[5]);
});






});


</script>