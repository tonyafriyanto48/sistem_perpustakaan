<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$RFid = $_POST['RFid'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM petugas where username='$username' and RFid='$RFid'");
mysqli_query($koneksi, "UPDATE `uuid_data` SET `uuid`=\"\" WHERE id = 1");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai dosen
	if($data['jabatan']=="orang"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jabatan'] = "orang";
		// alihkan ke halaman dashboard admin
		header("location:halaman_petugas/index_petugas.php");
 
	}else{
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>