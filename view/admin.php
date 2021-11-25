<?php 



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
  Add a New Admin
</button>

<!-- Modal -->
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
        
      <form action="/action_page.php">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="name" class="form-control" placeholder="Enter Name" id="name">
  </div>
  <div class="form-group">
    <label for="id">ID:</label>
    <input type="id" class="form-control" placeholder="Enter ID" id="id">
  </div>
  <div class="form-group">
    <label for="designation">Designation:</label>
    <input type="designation" class="form-control" placeholder="Enter Designation" id="designation">
  </div>
  </form>

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
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
      <th scope="col">Role</th>
      <th scope="col">Laptop</th>
      <th scope="col">Bag</th>
      <th scope="col">Mouse</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Saif</td>
      <td>777</td>
      <td>IT</td>
      <td></td>
      <td></td>
      <td>IPDC-224</td>
      <td>No</td>
      <td>Yes</td>
      <td>Active</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Saif</td>
      <td>777</td>
      <td>IT</td>
      <td>Intern</td>
      <td>Super Admin</td>
      <td>IPDC-224</td>
      <td>No</td>
      <td>Yes</td>
      <td>Active</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Saif</td>
      <td>777</td>
      <td>IT</td>
      <td>Intern</td>
      <td>Super Admin</td>
      <td>IPDC-224</td>
      <td>No</td>
      <td>Yes</td>
      <td>Active</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ayshik</td>
      <td>777</td>
      <td>IT</td>
      <td>Intern</td>
      <td>Super Admin</td>
      <td>IPDC-224</td>
      <td>No</td>
      <td>Yes</td>
      <td>Active</td>
    </tr>
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