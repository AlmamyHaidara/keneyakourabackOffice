<?php require_once("./components/header.php") ?>
<!-- Page Wrapper -->
<div id="wrapper">
  <!-- Sidebar -->
  <?php require_once("./components/sidebar.php") ?>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
      <!-- Topbar -->
      <?php require_once("./components/topbar.php") ?>

      <!-- End of Topbar -->

      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate
            Report</a>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addModal"><i class="fas fa-download fa-sm text-white-50"></i>Ajouter un nouveau Medecin</a>
        </div>

        <!-- Content Row -->

        <?php require_once("./components/recapRow.php") ?>
        <!-- Content Row -->

        <div class="columns">
          <!-- Area Chart -->

          <?php require_once("./components/table.php") ?>
          <!-- Pie Chart -->
          <?php require_once("./components/pieChart.php") ?>

        </div>

        <!-- Content Row -->

      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    <?php require_once("./components/footer.php") ?>