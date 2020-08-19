<?php
    $conn = mysqli_connect("localhost", "root", "", "magis");

    if(mysqli_connect_errno()){
    echo "Conn.failed";
    }
        
    $sql = "SELECT * FROM barangay";
    $result = mysqli_query($conn, $sql);
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
            <h1 class="m-0 text-dark">Statistics</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Stats</a></li>
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

        <div class="row" >
          <div class="col-md-12">
            <div class="card" >
              <div class="card-header">
                <h4 class="card-title">Forecast Scholars</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-center">
                      <strong>Scholars Population</strong>
                    </p>
                    <div class="chart" style="height: 550px;">
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
                </div>
              </div>
            </div>
          </div>
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
<!-- ChartJS -->
<script src="../assets/plugins/chart.js/Chart.min.js"></script>

<?php include("chartscripts_predicted.php");?>

</body>
</html>
