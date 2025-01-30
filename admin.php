<?php
include "header.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
                $query = mysqli_query($conn, "SELECT COUNT(id_wisata) as jumlah FROM wisata");
                $dataBerita = mysqli_fetch_array($query, MYSQLI_ASSOC);
                ?>

                <h3><?php echo $dataBerita['jumlah'];?></h3>

                <p>Jumlah Konten</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <div class="inner">
                <?php
                // Assuming 'id_kategori' is the column name in your database table
                $id_kategori_to_count = 1;

                // Modify the query to count only records with the specified 'id_kategori'
                $query = mysqli_query($conn, "SELECT COUNT(id_wisata) as jumlah FROM wisata WHERE id_kategori = $id_kategori_to_count");

                // Fetch the result
                $dataBerita = mysqli_fetch_array($query, MYSQLI_ASSOC);
                ?>

                <h3><?php echo $dataBerita['jumlah']; ?></h3>
                
                <p>Jumlah Akomondasi</p>
            </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                // Assuming 'id_kategori' is the column name in your database table
                $id_kategori_to_count = 2;

                // Modify the query to count only records with the specified 'id_kategori'
                $query = mysqli_query($conn, "SELECT COUNT(id_wisata) as jumlah FROM wisata WHERE id_kategori = $id_kategori_to_count");

                // Fetch the result
                $dataBerita = mysqli_fetch_array($query, MYSQLI_ASSOC);
                ?>

                <h3><?php echo $dataBerita['jumlah']; ?></h3>
                
                <p>Jumlah Candi</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                // Assuming 'id_kategori' is the column name in your database table
                $id_kategori_to_count = 3;

                // Modify the query to count only records with the specified 'id_kategori'
                $query = mysqli_query($conn, "SELECT COUNT(id_wisata) as jumlah FROM wisata WHERE id_kategori = $id_kategori_to_count");

                // Fetch the result
                $dataBerita = mysqli_fetch_array($query, MYSQLI_ASSOC);
                ?>

                <h3><?php echo $dataBerita['jumlah']; ?></h3>
                
                <p>Jumlah Budaya</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<script src="dist/js/pages/dashboard.js"></script>

</body>
</html>
