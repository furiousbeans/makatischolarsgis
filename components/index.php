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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-graduate"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><b><?php echo date('Y');?></b> | All Scholars</span>
                <span class="info-box-number"><?php echo number_format($totalsch_a+$totalsch_b+$totalsch_c); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-graduate"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><b><?php echo date('Y');?></b> | Scholar A</span>
                <span class="info-box-number"><?php echo number_format($totalsch_a); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-graduate"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><b><?php echo date('Y');?></b> | Scholar B</span>
                <span class="info-box-number"><?php echo number_format($totalsch_b); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-graduate"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><b><?php echo date('Y');?></b> | Scholar C</span>
                <span class="info-box-number"><?php echo number_format($totalsch_c); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row" >
          <div class="col-md-12">
            <div class="card" >
              <div class="card-header">
                <h4 class="card-title">Makati City Scholars Population Per Year</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-9">
                    <p class="text-center">
                      <strong>Scholars Population</strong>
                    </p>
                    <div class="chart" style="height: 380px;">
                      <!-- Sales Chart Canvas -->
                      <canvas id="tbl" height="145"></canvas>
                      <!-- <canvas id="salesChart" height="300" style="height: 300px;"></canvas> -->
                    </div>
                    <center>
                    <select id="brgyselect" name="brgyselect" onClick="updateChart()" style="margin-top: -10px;">
                      <option>Select Barangay</option>
                      <?php
                          foreach($result as $key => $value){ ?>
                              <option value="<?=$value['brgy_id'];?>">
                                  <?=$value['brgy_name'];?>
                              </option>
                          <?php } ?>   
                    </select>
                    </center>
                  </div>
                  <div class="col-md-3">                            
                    <div class="info-box mb-6" style="height: 80%; margin-top: 50px; background-color: #f5f5f5">
                      <span class="info-box-icon"><i class="fas fa-user-graduate"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">  ory</span>
                        <span class="info-box-number">5,200</span>
                        <span class="info-box-text">Inventory</span>
                        <span class="info-box-number">5,200</span>
                        <span class="info-box-text">Inventory</span>
                        <span class="info-box-number">5,200</span>
                        <span class="info-box-text">Inventory</span>
                        <span class="info-box-number">5,200</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">2020 Scholar Distribution</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 450px; overflow: hidden">
                      <div style="margin-top: -50px; margin-left: -70px; height: 50%; width: 50%;">
                        <?php
                            include("../assets/data/map/default.html")
                        ?>
                      </div>
                    </div>
                  </div>

                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <!-- /.col -->

          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Inventory</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-heart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mentions</span>
                <span class="info-box-number">92,050</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Downloads</span>
                <span class="info-box-number">114,381</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Direct Messages</span>
                <span class="info-box-number">163,921</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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
<!-- ChartJS -->
<script src="../assets/plugins/chart.js/Chart.min.js"></script>

<?php include("chartscripts.php");?>

</body>
</html>
