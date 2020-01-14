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

	include "../config/koneksi.php";
	$id_tamu = $_GET['id_tamu'];

	$sql = "DELETE FROM tamu WHERE id_tamu=".$id_tamu;
	$query = mysqli_query($koneksi, $sql);
	if($query){
		echo "<script>
                swal('Deleted!', 'Data Berhasil Dihapus.', 'success');
            </script>";
	} else {
		echo "Gagal";
	}
	mysqli_close($koneksi);

?>
<script language=javascript>
setTimeout("location.href='bukutamu.php'", 1500);
</script>
</body>
</html>