<!DOCTYPE html>
<?php
  session_start();
  if ($_SESSION['username']=='') 
  {
    header('location:../');
  }else{
      if($_SESSION['level'] != 1)
      {
        echo '<script>alert("Anda harus login sebagai ADMIN!!");document.location="../index.php"</script>';
      }
    $user = $_SESSION["username"];
    $id_user = $_SESSION["id_user"];  
    $level = $_SESSION["level"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/AdminLTE.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/all-skins.min.css">
</head>
<body>
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>B</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Buku</b> Tamu</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

    </nav>
  </header>

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../img/avatar04.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
        <li><a href="bukutamu.php"><i class="fa fa-book"></i> <span>Buku Tamu</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="../logout.php"><i class="fa fa-circle-o text-red"></i> <span>Keluar</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Admin
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>
        </div>
        <div class="box-body">
          <form role="form" action="action_tambah.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama" autofocus required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="keperluan">Keperluan</label>
                    <textarea name="keperluan" id="keperluan" class="form-control" placeholder="Masukkan Keperluan anda"></textarea>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Catatan : -
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">EAS</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</body>
<script type="text/javascript" src="../asset/js/jquery.min.js"></script>
<script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../asset/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="../asset/js/adminlte.min.js"></script>
<script type="text/javascript" src="../asset/js/demo.js"></script>
</html>
<?php } ?>