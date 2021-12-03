<?php
//koneksi
include('confiq/koneksi.php');
 
//ambil data dari form
$id_admin=$_POST['id_admin'];
$username=$_POST['username'];
$password=sha1($_POST['password']);
 
//memasukan data ke database
$query="INSERT INTO tb_admin VALUES ('$id_admin', '$username', '$password')";
$simpan=mysqli_query($conn,$query);
 
?>
<a href="tampil_admin.php"> Kembali Untuk lihat Data</a>