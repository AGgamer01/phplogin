<?php
//koneksi
require_once('confiq/koneksi.php');
 
$id_admin=$_GET['id_admin']; //ambil ID
 
$query="DELETE FROM tb_admin WHERE id_admin = '$id_admin'";
$data=mysqli_query($conn,$query);
 
?>
<a href="tampil_admin.php"> Kembali Untuk lihat Data</a>