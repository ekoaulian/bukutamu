<?php  
	session_start();
	include "../config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sukses</title>
	  <!-- Tell the browser to be responsive to screen width -->
	  <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="../asset/font-awesome/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="../asset/Ionicons/css/ionicons.min.css">
	  <link rel="stylesheet" type="text/css" href="../asset/css/AdminLTE.min.css">
	  <link rel="stylesheet" type="text/css" href="../asset/css/all-skins.min.css">
	  <link rel="stylesheet" type="text/css" href="../asset/morris.js/morris.css">
	  <!-- Google Font -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<script src="../asset/sa/dist/sweetalert.js"></script>
    <link rel="stylesheet" href="../asset/sa/dist/sweetalert.css">
</head>
<body>

<?php

	$id_admin	= 1;
	$nama 		= $_POST['nama'];
	$email		= $_POST['email'];
	$alamat		= $_POST['alamat'];
	$keperluan	= $_POST['keperluan'];
	date_default_timezone_set('Asia/Jakarta');
    $tanggal    = date("d M Y");
    $hari		= date('D');
    switch ($hari) {
    	case 'Sun':
    		$hari_ini="Minggu";
    		break;
    	case 'Mon':
    		$hari_ini="Senin";
    		break;
    	case 'Tue':
    		$hari_ini="Selasa";
    		break;
    	case 'Wed':
    		$hari_ini="Rabu";
    		break;
    	case 'Thu':
    		$hari_ini="Kamis";
    		break;
    	case 'Fri':
    		$hari_ini="Jumat";
    		break;
    	case 'Sat':
    		$hari_ini="Sabtu";
    		break;
    	default:
    		$hari_ini="Hari tidak diketahui";
    		break;
    }

	
	$sql = "INSERT INTO tamu values('','$id_admin','$nama','$email','$alamat','$keperluan','$tanggal','$hari_ini')";
	if (mysqli_query($koneksi, $sql)){
		echo "<script>
                swal ('Berhasil!', 'Data Berhasil Diinput', 'success');
            </script>";
	}else{
		echo "Gagal";
		 // print_r($sql);
		 // exit();
	}

	mysqli_close($koneksi);

?>
<script language=javascript>
setTimeout("location.href='index.php'", 1100);
</script>
</body>
</html>