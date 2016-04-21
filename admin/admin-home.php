<?php
  session_start();

  if (isset($_SESSION["level"]) == 1) {
    # code...
    include '../config/conn.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <?php
      include 'view/head.php';
    ?>
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <!-- the fixed layout is not compatible with sidebar-mini -->
  <body class="hold-transition skin-blue-light fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <?php
        include 'view/header.php';
      ?>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <?php
        include 'view/aside.php';
      ?>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard - Administrator
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Layout</a></li>
            <li class="active">Fixed</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php
        include 'view/footer.php';
      ?>
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <?php
      include 'view/foot.php';
    ?>
  </body>
</html>
<?php
  }else{
    echo "<script type='text/javascript'>alert('Sorry, You can not access this page...!');window.location.href='../index.php';</script>";
}
?>