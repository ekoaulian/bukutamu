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
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Buku Tamu</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/AdminLTE.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/all-skins.min.css">
  <link rel="stylesheet" href="../asset/sa/dist/sweetalert.css">
  
  <link rel="stylesheet" href="../asset/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<body>
<body class="hold-transition skin-yellow fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
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
          <img src="../img/avatar3.png" class="img-circle" alt="User Image">
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
        
        <li class="active"><a href="bukutamu.php"><i class="fa fa-book"></i> <span>Buku Tamu</span></a></li>
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
        <li class="active">daftar buku tamu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Buku Tamu</h3>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th style="width: 10px">Tanngal</th>
                      <th style="width:150px">Nama</th>
                      <th style="width:150px">Email</th>
                      <th>Alamat</th>
                      <th>Keperluan</th>
                      <th style="width: 10px">Aksi</th>
                    </tr>
                </thead>
                    <?php
                        include '../config/koneksi.php';
                        $query = "select * from tamu";
                        $sql = mysqli_query ($koneksi, $query);
                        while($d = mysqli_fetch_array($sql))
                        {
                    ?>

                    <tr>
                      <td><?= $d['hari']." | ".$d['tanggal'] ?></td>
                      <td><?= $d['nama'] ?></td>
                      <td><?= $d['email'] ?></td>
                      <td><?= $d['alamat'] ?></td>
                      <td><?= $d['keperluan'] ?></td>
                      <td>
                      <a href="action_delete.php?id_tamu=<?= $d['id_tamu']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus')"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </table>
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
<!-- DataTables -->
<script src="../asset/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../asset/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</html>
<?php } ?>