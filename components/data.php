<?php
    $conn = mysqli_connect("localhost", "root", "", "magis");

    if(mysqli_connect_errno()){
    echo "Conn.failed";
    }
        
    $sql = "SELECT * FROM barangay";
    $result = mysqli_query($conn, $sql);

    $sql_sch_a = "SELECT `year`, (`Bangkal`+`Bel-Air`+`Carmona`+`Cembo`+`Comembo`+`Dasmarinas`+ `East Rembo`+ `Forbes Park`+ `Guadalupe Nuevo`+ `Guadalupe Viejo`+ `Kasilawan`+ `La Paz`+ `Magallanes`+ `Olympia`+ `Palanan`+ `Pembo`+ `Pinagkaisahan`+ `Pio Del Pilar`+ `Pitogo`+ `Poblacion`+ `Post Proper Northside`+ `Post Proper Southside`+ `Rizal`+ `San Antonio`+ `San Isidro`+ `San Lorenzo`+ `Santa Cruz`+ `Singkamas`+ `South Cembo`+ `Tejeros`+ `Urdaneta`+ `Valenzuela`+ `West Rembo`) as totalsch FROM `scholar_a` WHERE year = year(curdate())";
    $res_sch_a = mysqli_query($conn, $sql_sch_a) or die("Bad query: $sql_sch_a");
    $row_a = mysqli_fetch_assoc($res_sch_a);
    $totalsch_a = $row_a['totalsch'];

    $sql_sch_b = "SELECT `year`, (`Bangkal`+`Bel-Air`+`Carmona`+`Cembo`+`Comembo`+`Dasmarinas`+ `East Rembo`+ `Forbes Park`+ `Guadalupe Nuevo`+ `Guadalupe Viejo`+ `Kasilawan`+ `La Paz`+ `Magallanes`+ `Olympia`+ `Palanan`+ `Pembo`+ `Pinagkaisahan`+ `Pio Del Pilar`+ `Pitogo`+ `Poblacion`+ `Post Proper Northside`+ `Post Proper Southside`+ `Rizal`+ `San Antonio`+ `San Isidro`+ `San Lorenzo`+ `Santa Cruz`+ `Singkamas`+ `South Cembo`+ `Tejeros`+ `Urdaneta`+ `Valenzuela`+ `West Rembo`) as totalsch FROM `scholar_b` WHERE year = year(curdate())";
    $res_sch_b = mysqli_query($conn, $sql_sch_b) or die("Bad query: $sql_sch_a");
    $row_b = mysqli_fetch_assoc($res_sch_b);
    $totalsch_b = $row_b['totalsch'];

    $sql_sch_c = "SELECT `year`, (`Bangkal`+`Bel-Air`+`Carmona`+`Cembo`+`Comembo`+`Dasmarinas`+ `East Rembo`+ `Forbes Park`+ `Guadalupe Nuevo`+ `Guadalupe Viejo`+ `Kasilawan`+ `La Paz`+ `Magallanes`+ `Olympia`+ `Palanan`+ `Pembo`+ `Pinagkaisahan`+ `Pio Del Pilar`+ `Pitogo`+ `Poblacion`+ `Post Proper Northside`+ `Post Proper Southside`+ `Rizal`+ `San Antonio`+ `San Isidro`+ `San Lorenzo`+ `Santa Cruz`+ `Singkamas`+ `South Cembo`+ `Tejeros`+ `Urdaneta`+ `Valenzuela`+ `West Rembo`) as totalsch FROM `scholar_c` WHERE year = year(curdate())";
    $res_sch_c = mysqli_query($conn, $sql_sch_c) or die("Bad query: $sql_sch_a");
    $row_c = mysqli_fetch_assoc($res_sch_c);
    $totalsch_c = $row_c['totalsch'];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>MAGIS | Dashboard</title>

  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <?php include("navbar.php")?>

  <?php include("sidenav.php")?>  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data</a></li>
              <li class="breadcrumb-item active">MAGIS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row" >
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="card" >
              <div class="card-header">
                <h4 class="card-title">Upload .csv file</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="chart" style="height: 300px;">
                      <!-- Sales Chart Canvas -->
                      <canvas id="tbl" height="145"></canvas>
                      <!-- <canvas id="salesChart" height="300" style="height: 300px;"></canvas> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2"></div>

        </div>

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>


<!-- REQUIRED SCRIPTS -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../assets/dist/js/adminlte.js"></script>

<script src="../assets/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../assets/plugins/raphael/raphael.min.js"></script>
<script src="../assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>


</body>
</html>
