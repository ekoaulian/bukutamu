<?php 

session_start(); 
// menghubungkan php dengan koneksi database
include 'config/koneksi.php';

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
				alert('Username dan Password yang anda masukan salah');
				document.location.href = 'index.php';
		</script>";
}
?>