<?php 

$invoice="active";

include('header.php');

require_once ('Controllers/inventorycontroller.php');
$info=invoiceinfo();
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Invoice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
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
      <th scope="col">Vendor</th>
      <th scope="col">Purchase Date</th>
      <th scope="col">Procurement Reference</th>
      <th scope="col"> Delevery Date</th>
      <th scope="col">Warranty Year</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                     
                        echo "<td>".$infos["sl"]."</td>";
						 echo "<td>".$infos["assetid"]."</td>";
						  echo "<td>".$infos["vendor"]."</td>";
              echo "<td>".$infos["deleverydate"]."</td>";
						   echo "<td>".$infos["procrumentref"]."</td>";
              
              echo "<td>".$infos["procurementdate"]."</td>";
					   echo "<td>".$infos["warranty"]."</td>";
					    						 
            

            
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