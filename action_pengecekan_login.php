<?php  
	session_start();
	include "config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sukses</title>
	  <!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="asset/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="asset/Ionicons/css/ionicons.min.css">
  	<link rel="stylesheet" type="text/css" href="asset/css/AdminLTE.min.css">
  	<link rel="stylesheet" type="text/css" href="asset/css/all-skins.min.css">
  	<link rel="stylesheet" type="text/css" href="asset/morris.js/morris.css">
  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<script src="asset/sa/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="asset/sa/dist/sweetalert.css">
</head>
<body>
<?php 

// menangkap data yang dikirim dari form login
$username = $_POST['username'];

// $password = md5($_POST['password']); 
$password = md5($_POST['password']); 

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select id_user,username,level from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
	// buat session login dan username
	$_SESSION["username"] = $username;
	$_SESSION["id_user"] = $data['id_user'];
	$_SESSION["level"] = $data['level'];

	// alihkan ke halaman dashboard admin
	header("location:pengecekan_session_login.php");
}else{
	//echo "login gagal";
	echo "<script>
                swal ('LOGIN GAGAL!', 'Username atau Password Salah', 'error');
            </script>";
}
?>
<script language=javascript>
setTimeout("location.href='index.php'", 1100);
</script>
</body>
</html>