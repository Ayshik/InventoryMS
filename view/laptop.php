<?php 
require_once ('Controllers/employeecontroller.php');
$info=getlaptop();

$laptop="active";

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
  Add a New Laptop
</button>

<a href="Controllers/export.php"><button type="button" class="btn btn-primary">Export</button></a>
<!-- <button onclick="alocated()" class="btn btn-info"  >
  Alocated
</button>
<button type="button" class="btn btn-info">
  Inventory
</button>
<button type="button" class="btn btn-info">
  Faulty
</button>
<button type="button" class="btn btn-info">
  Customized
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laptop Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<form action="Controllers/employeecontroller.php" method="post">
  <div class="form-group">
    <label for="name">Laptop ID:</label>
    <input type="name" class="form-control"name="assetid" placeholder="Enter Laptop ID" id="assetid">
  </div>
  <div class="form-group">
    <label for="id">Model:</label>
    <input type="id" class="form-control" name="model" placeholder="Enter Model" id="model">
  </div>
  <div class="form-group">
    <label for="id">Serial Number:</label>
    <input type="id" class="form-control" name="serial" placeholder="Enter Serial Number" id="serial">
  </div>  
  
  <div class="form-group">
    <label for="department">Laptop Username:</label>
    <input type="department" class="form-control" name="laptopusername" placeholder="Enter Username" id="laptopusername">
  </div>
  <div class="form-group">
    <label for="text">Maker:</label>
    <input type="text" class="form-control" name="maker" placeholder="Enter Laptop Maker" id="maker">
  </div>
  <div class="form-group">
    <label for="text">Hostname:</label>
    <input type="text" class="form-control" name="hostname" placeholder="Enter Hostname" id="hostname">
  </div>
  <div class="form-group">
    <label for="text">IP:</label>
    <input type="text" class="form-control" name="ip" placeholder="Enter IP" id="ip">
  </div>
  <div class="form-group">
    <label for="text">Domain:</label>
    <input type="text" class="form-control" name="domain" placeholder="Enter Domain" id="domain">
  </div>
  <div class="form-group">
    <label for="text">CPU:</label>
    <input type="text" class="form-control" name="cpu" placeholder="Enter Laptop CPU" id="cpu">
  </div>
  <div class="form-group">
    <label for="text">OS Key:</label>
    <input type="text" class="form-control" name="oskey" placeholder="Enter Laptop OS Key" id="oskey">
  </div>
  <div class="form-group">
    <label for="text">OS Version:</label>
    <input type="text" class="form-control" name="osversion" placeholder="Enter Laptop OS Version" id="osversion">
  </div>
  <div class="form-group">
    <label for="text">Vendor:</label>
    <input type="text" class="form-control" name="vendor" placeholder="Enter Laptop Vendor" id="vendor">
  </div>
  <div class="form-group">
    <label for="text">Procrument Refference:</label>
    <input type="text" class="form-control" name="procrumentref" placeholder="Enter Procrument Refference" id="procrumentref">
  </div>
  <tr>
          <td>RAM:</td>
          <td>
            <select name="ram">
              <option>4</option>
              <option>8</option>
              <option>12</option>
              <option>16</option>
              <option>20</option>
              <option>24</option>
              <option>28</option>
              <option>32</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>HDD:</td>
          <td>
            <select name="hdd">
              <option>HDD 128</option>
              <option>HDD 256</option>
              <option>HDD 512</option>
              <option>HDD 1024</option>

            </select>
          </td>
        </tr>
        <tr>
          <td>SSD:</td>
          <td>
            <select name="ssd">
              <option>SSD 128</option>
              <option>SSD 256</option>
              <option>SSD 512</option>
              <option>SSD 1024</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Warranty Year:</td>
          <td>
            <select name="warranty">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
            </select>
          </td>
        </tr>
        <br></br>
        <label for="delevery date">Purchase Date:</label>
        <input type="date" id="delevery date" name="deleverydate">

        <br></br>

        <label for="procurement date">Delevery Date:</label>
        <input type="date" id="procurement date" name="procurementdate">
 



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="insertlaptop" class="btn btn-primary">Add</button>
      </div>
	   </form>
    </div>
  </div>
</div>
</div>








<!-- this is for update -->
<div class="modal fade " id="updatepanel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laptop Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



<form action="Controllers/inventorycontroller.php" method="post">
  <div class="form-group">
    <label for="name">Laptop ID</label>
    <input type="name" class="form-control" id="uassetid" name="lassetid" placeholder="Enter Asset ID" required>
    <input type="hidden" class="form-control" id="sl" name="sl" placeholder="Enter Asset ID" required>
  </div>
  <div class="form-group">
    <label for="id">Laptop Username</label>
    <input type="id" class="form-control" name="lusername" placeholder="Enter Laptop Username" id="uusername" required>
    <input type="hidden" class="form-control" id="husername" name="husername" placeholder="Enter Laptop Username" required>
  </div>
  
  <div class="form-group">
    <label for="designation">Host Name</label>
    <input type="designation" class="form-control" name="lhostname" placeholder="Enter Host Name" id="uhostname" required>
    <input type="hidden" class="form-control" id="hhostname" name="hhostname" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="name">IP</label>
    <input type="name" class="form-control" id="uip" name="lip" placeholder="Enter IP" required>
    <input type="hidden" class="form-control" id="hip" name="hip" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="name">Domain</label>
    <input type="name" class="form-control" id="udomain" name="ldomain" placeholder="Enter Domain" required>
    <input type="hidden" class="form-control" id="hdomain" name="hdomain" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="name">OS Key</label>
    <input type="name" class="form-control" id="uoskey" name="loskey" placeholder="Enter OS Key" required>
    <input type="hidden" class="form-control" id="hoskey" name="hoskey" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="name">OS Version</label>
    <input type="name" class="form-control" id="uosversion" name="losversion" placeholder="Enter OS Version" required>
    <input type="hidden" class="form-control" id="hosversion" name="hosversion" placeholder="" required>
  </div>
  <input type="hidden" class="form-control" id="hram" name="hram" placeholder="" required>
  <tr>
          <td>RAM:</td>
          <td>
            <select name="lram" id="uram">
           
              <option>4</option>
              <option>8</option>
              <option>12</option>
              <option>16</option>
              <option>20</option>
              <option>24</option>
              <option>28</option>
              <option>32</option>
            </select>
          </td>
        </tr>
        <input type="hidden" class="form-control" id="hhdd" name="hhdd" placeholder="" required>
        <tr>
          <td>HDD:</td>
          <td>
            <select name="lhdd" id="uhdd">
           
              <option>HDD 128</option>
              <option>HDD 256</option>
              <option>HDD 512</option>
              <option>HDD 1024</option>

            </select>
          </td>
        </tr>
        <input type="hidden" class="form-control" id="hssd" name="hssd" placeholder="" required>
        <tr>
          <td>SSD:</td>
          <td>
            <select name="lssd" id="ussd">
            
              <option>SSD 128</option>
              <option>SSD 256</option>
              <option>SSD 512</option>
              <option>SSD 1024</option>

            </select>
          </td>
        </tr>
  
  </select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="laptopupdate" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End update -->


          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Laptop</li>
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
      <th scope="col">Laptop ID</th>
      <th scope="col">Model</th>
      <th scope="col">Serial</th>
      
      <th scope="col">Laptop Username</th>
      <th scope="col">Maker</th>
      <th scope="col">Hostname</th>
      <th scope="col">IP</th>
      <th scope="col">Domain</th>
      <th scope="col">RAM</th>
      <th scope="col">HDD</th>
      <th scope="col">SSD</th>
      <th scope="col">CPU</th>
      <th scope="col">OS Key</th>
      <th scope="col">OS Version</th>
     
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
     <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                     
                        echo "<td>".$infos["sl"]."</td>";
						 echo "<td>".$infos["assetid"]."</td>";
						  echo "<td>".$infos["model"]."</td>";
              echo "<td>".$infos["serial"]."</td>";
						   
              echo "<td>".$infos["laptopusername"]."</td>";
					   echo "<td>".$infos["maker"]."</td>";
					   echo "<td>".$infos["hostname"]."</td>";
					    echo "<td>".$infos["ip"]."</td>";
              echo "<td>".$infos["domain"]."</td>";
              echo "<td>".$infos["ram"]."</td>";
              echo "<td>".$infos["hdd"]."</td>";
              echo "<td>".$infos["ssd"]."</td>";
						echo "<td>".$infos["cpu"]."</td>";
						 echo "<td>".$infos["oskey"]."</td>";
						  echo "<td>".$infos["osversion"]."</td>";
             				 
            

              echo '<td><button class="btn btn-success editbutton" data-toggle="modal" name="editbutton" ><a  i class="fa fa-pen" style="color:white">  Edit</a></td>';
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
$('#uassetid').val(data[1]);
$('#hassetid').val(data[1]);
$('#uusername').val(data[4]);
$('#husername').val(data[4]);
$('#uhostname').val(data[6]);
$('#hhostname').val(data[6]);
$('#uip').val(data[7]);
$('#hip').val(data[7]);
$('#udomain').val(data[8]);
$('#hdomain').val(data[8]);
$('#uoskey').val(data[13]);
$('#hoskey').val(data[13]);
$('#uosversion').val(data[14]);
$('#hosversion').val(data[14]);
$('#uram').val(data[9]);
$('#hram').val(data[9]);
$('#uhdd').val(data[10]);
$('#hhdd').val(data[10]);
$('#ussd').val(data[11]);
$('#hssd').val(data[11]);
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