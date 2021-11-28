<?php 

$customize="active";
include('header.php');

require_once ('Controllers/inventorycontroller.php');
$info=customizeinfo();
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Customization</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Customization</li>
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
      <th scope="col">Laptop Username</th>
      
      <th scope="col">Host Name</th>
      <th scope="col">IP</th>
      <th scope="col">Domain</th>
      <th scope="col">Oparatig System</th>
      <th scope="col">OS Version</th>
      <th scope="col">RAM</th>
      <th scope="col">HDD</th>
      <th scope="col">SSD</th>
      
      
    </tr>
  </thead>
  <tbody>
  <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                     
                        echo "<td>".$infos["sl"]."</td>";
						 echo "<td>".$infos["assetid"]."</td>";
             echo "<td>".$infos["laptopusername"]."</td>";
             
					   echo "<td>".$infos["hostname"]."</td>";
					    echo "<td>".$infos["ip"]."</td>";
              echo "<td>".$infos["domain"]."</td>";
              echo "<td>".$infos["oskey"]."</td>";
						  echo "<td>".$infos["osversion"]."</td>";
              echo "<td>".$infos["ram"]."</td>";
              echo "<td>".$infos["hdd"]."</td>";
              echo "<td>".$infos["ssd"]."</td>";
             
              					 
            

              
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