<?php

  
?>


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../assets/img/mkti_logo.png" alt="MAGIS | Dashboard" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MAGIS | Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="height:25%; align-items: center;">
        <div class="image">
          <img src="../assets/dist/img/mkti_logo.png" class="img-circle elevation-2" style="height: 75px; width:75px;" alt="User Image">
        </div>
        <div class="info">
          <span style="color: #fff;">Administrator</span>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="maps.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Map
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="stats.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Statistics
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data
              </p>
            </a>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>