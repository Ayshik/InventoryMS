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

<button  type="button" class="btn btn-success" data-toggle="modal" >
<a herf="" i class="fa fa-search" style="color:white"></a>
</button>
<button type="button" class="btn btn-info" data-toggle="modal" >
  Alocated
</button>
<button type="button" class="btn btn-info" data-toggle="modal">
  Inventory
</button>
<button type="button" class="btn btn-info" data-toggle="modal">
  Faulty
</button>
<button type="button" class="btn btn-info" data-toggle="modal">
  Customized
</button>

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
    <label for="name">Asset Id:</label>
    <input type="name" class="form-control"name="assetid" placeholder="Enter Name" id="name">
  </div>
  <div class="form-group">
    <label for="id">Model:</label>
    <input type="id" class="form-control" name="model" placeholder="Enter Model" id="name">
  </div>
  <div class="form-group">
    <label for="designation">DSN:</label>
    <input type="designation" class="form-control" name="dsn" placeholder="Enter DSN" id="designation">
  </div>
  <div class="form-group">
    <label for="department">Laptop Username:</label>
    <input type="department" class="form-control" name="laptopusername" placeholder="Enter Username" id="username">
  </div>
  <div class="form-group">
    <label for="text">Maker:</label>
    <input type="text" class="form-control" name="maker" placeholder="Enter Laptop Maker" id="text">
  </div>
  <div class="form-group">
    <label for="text">Asset ID:</label>
    <input type="text" class="form-control" name="assetid" placeholder="Enter Asset ID" id="text">
  </div>
  <div class="form-group">
    <label for="text">Hostname:</label>
    <input type="text" class="form-control" name="hostname" placeholder="Enter Hostname" id="text">
  </div>
  <div class="form-group">
    <label for="text">IP:</label>
    <input type="text" class="form-control" name="ip" placeholder="Enter IP" id="text">
  </div>
  <div class="form-group">
    <label for="text">Domain:</label>
    <input type="text" class="form-control" name="domain" placeholder="Enter Domain" id="text">
  </div>
  <div class="form-group">
    <label for="text">CPU:</label>
    <input type="text" class="form-control" name="cpu" placeholder="Enter Laptop CPU" id="text">
  </div>
  <div class="form-group">
    <label for="text">OS Key:</label>
    <input type="text" class="form-control" name="oskey" placeholder="Enter Laptop OS Key" id="text">
  </div>
  <div class="form-group">
    <label for="text">OS Version:</label>
    <input type="text" class="form-control" name="osversion" placeholder="Enter Laptop OS Version" id="text">
  </div>
  <div class="form-group">
    <label for="text">Vendor:</label>
    <input type="text" class="form-control" name="vendor" placeholder="Enter Laptop Vendor" id="text">
  </div>
  <div class="form-group">
    <label for="text">Procrument Refference:</label>
    <input type="text" class="form-control" name="procrumentref" placeholder="Enter Procrument Refference" id="text">
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
              <option>120</option>
              <option>256</option>
              <option>512</option>
              <option>1024</option>
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

        <label for="procurement date">Procurement Date:</label>
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


          </div><!-- /.col -->
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
      
	  
	 <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">SN</th>
      <th scope="col">Asset ID</th>
      <th scope="col">Model</th>
      <th scope="col">DSN</th>
      <th scope="col">Laptop Username</th>
      <th scope="col">Maker</th>
      <th scope="col">Hostname</th>
      <th scope="col">IP</th>
      <th scope="col">Domain</th>
      <th scope="col">RAM</th>
      <th scope="col">HDD</th>
      <th scope="col">CPU</th>
      <th scope="col">OS Key</th>
      <th scope="col">OS Version</th>
      <th scope="col">Purchase Date</th>
      <th scope="col">Vendor</th>
      <th scope="col">Warranty Year</th>
      <th scope="col">Procurment Date</th>
      <th scope="col">Procrument Refference</th>
      <th scope="col">Action</th>
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
						   echo "<td>".$infos["dsn"]."</td>";
                      echo "<td>".$infos["laptopusername"]."</td>";
					   echo "<td>".$infos["maker"]."</td>";
					   echo "<td>".$infos["hostname"]."</td>";
					    echo "<td>".$infos["ip"]."</td>";
						echo "<td>".$infos["cpu"]."</td>";
						 echo "<td>".$infos["oskey"]."</td>";
						  echo "<td>".$infos["osversion"]."</td>";
						   echo "<td>".$infos["procrumentref"]."</td>";
                      echo "<td>".$infos["ram"]."</td>";
					   echo "<td>".$infos["hdd"]."</td>";
					  
					   echo "<td>".$infos["warranty"]."</td>";
					    echo "<td>".$infos["deleverydate"]."</td>";
						echo "<td>".$infos["procurementdate"]."</td>";
						 
            

            echo '<td><button class="btn btn-success"> <a href="Controllers/updatelaptop.php?id='.$infos["sl"].'" i class="fa fa-pen" style="color:white">  Edit</a></td>';
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