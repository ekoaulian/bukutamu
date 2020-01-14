<?php
	// menghubungkan php dengan koneksi database
	include 'config/koneksi.php';
	session_start();

	if ($_SESSION['username']=='') {
		header('location:index.php');
	}else{
		$user = $_SESSION["username"];
		$id_user = $_SESSION["id_user"];	
		$level = $_SESSION["level"];

		// var_dump($user,$id_user,$level);

		if ($level =='1') {
			header('location:admin/index.php');
		}

	}

?>