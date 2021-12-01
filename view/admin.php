<?php
require_once ('Controllers/admincontroller.php');
$info=admininfo();

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
$admin="active";

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
  Add Admin
</button>
<!-- Add admin -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<form action="Controllers/admincontroller.php" method="post">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" name="adname" placeholder="Enter Name" id="adname" required>
  </div>
  <div class="form-group">
    <label for="id">Department:</label>
    <input type="id" class="form-control" name="addepartment" placeholder="Enter Department" id="addepartment" required>
  </div>
  <div class="form-group">
    <label for="designation">Email:</label>
    <input type="designation" class="form-control" name="ademail" placeholder="Enter Email" id="ademail" required>
  </div>
  <div class="form-group">
    <label for="department">Mobile:</label>
    <input type="department" class="form-control" placeholder="Enter Mobile Number" name="admobile" required>
  </div>
  <div class="form-group">
    <label for="department">Password:</label>
    <input type="password" class="form-control" placeholder="Enter Password" name="adpassword" required>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="insertadmin" class="btn btn-primary">Add</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Admin Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<form action="Controllers/admincontroller.php" method="post">
  <div class="form-group">
  <input type="hidden" class="form-control" id="sl" name="sl" placeholder="Enter Name" required>
    <label for="name">Name:</label>
    <input type="name" class="form-control" id="name" name="name" placeholder="Enter Name" required>
  </div>
  <div class="form-group">
    <label for="id">Department:</label>
    <input type="id" class="form-control" name="department" placeholder="Enter Department" id="department" required>
  </div>
  <div class="form-group">
    <label for="designation">Email:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email" id="email" required>
  </div>
  <div class="form-group">
    <label for="department">Mobile:</label>
    <input type="mobile" class="form-control" placeholder="Enter Mobile Number" name="mobile" id="mobile" required>
  </div>
  <div class="form-group">
    <label for="department">Password:</label>
    <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password" required>
  </div>
  
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="updateadmin" class="btn btn-primary">Update</button>
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


	 <table id="mytable" class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
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
						            echo "<td>".$infos["adname"]."</td>";
                        echo "<td>".$infos["addepartment"]."</td>";
                        echo "<td>".$infos["ademail"]."</td>";
                        echo "<td>".$infos["admobile"]."</td>";
                       echo "<td style=display: hidden>".$infos["adpassword"]."</td>";
            
 echo '<td><button class="btn btn-success editbutton" data-toggle="modal" name="editbutton"  ><a  i class="fa fa-pen" style="color:white">  Edit</a></td>';
            echo '<td><button class="btn btn-danger"><a href="Controllers/admindelete.php?id='.$infos["sl"].'&amp; i class="fa fa-trash" style="color:white">  Release</a></td>';
			
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
$('#name').val(data[1]);
$('#department').val(data[2]);
$('#email').val(data[3]);
$('#mobile').val(data[4]);
$('#password').val(data[5]);
});






});


</script>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("mytable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>