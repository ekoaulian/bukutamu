<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Buku Tamu</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/AdminLTE.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/all-skins.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="asset/css/select2.min.css"> -->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="img/logo.png" class="img-circle" alt="logo" width="150">
    <br/>
    <a href="#"><b>Buku Tamu</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">www.ipem.ac.id</p>
    <?php
    if (isset($_SESSION['id_user'])){
    ?>
    <h1 class="text-center">Anda sudah login!</h1>
    <h3 class="text-center"><a href="admin">Ke Menu</a></h3>
    <?php 
    }else{
    ?>
    <form action="action_pengecekan_login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" data-toggle="password">
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-warning btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <?php } ?>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

</body>
<script type="text/javascript" src="asset/js/jquery.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="asset/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="asset/js/adminlte.min.js"></script>
<script type="text/javascript" src="asset/js/demo.js"></script>
<!-- showpassword -->
<script src="asset/bsp/src/bootstrap-show-password.js"></script>
</html>