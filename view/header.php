<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventory Management System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/IPDC.png" alt="IPDC Logo" height="400" width="500">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://www.ipdcbd.com/" class="nav-link">Official Website</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" id="myInput" onkeyup="myFunction()" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Fullscreen -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- /Fullscreen -->

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/IPDC.png" alt="IPDC Logo" class="brand-image">
      <span class="brand-text font-weight-light">IPDC Finance</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar"  type="text" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link <?php echo $dashboard ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
             
              <p>
                Dashboard
              
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="employee.php" class="nav-link <?php echo $employee ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Employee List
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="laptop.php" class="nav-link <?php echo $laptop ?>">
              <i class="nav-icon fas fa-laptop"></i>
              <p>
                Laptop List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="inventory.php" class="nav-link <?php echo $inventory ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Laptop Inventory
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="allocate.php" class="nav-link <?php echo $allocate ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Allocated to Users
              </p>
            </a>
          </li>
          
         
          <li class="nav-item">
            <a href="faulty.php" class="nav-link <?php echo $faulty ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Faulty Laptops
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="customize.php" class="nav-link <?php echo $customize ?>">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Customized Laptops
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="invoice.php" class="nav-link <?php echo $invoice ?>">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Invoice
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="history.php" class="nav-link <?php echo $history ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User History
              </p>
            </a>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  