<?php
//koneksi
include('confiq/koneksi.php');
 
//ambil data dari form
$id=$_POST['id'];
$nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$gaji=$_POST['gaji'];
 
//memasukan data ke database
$query="UPDATE tbpengurus SET nama = '$nama', gender = '$gender', alamat = '$alamat', gaji = '$gaji' WHERE id = '$id' ";
$ubah=mysqli_query($conn,$query);
 
?>
<a href="tampil_data.php"> Kembali Untuk lihat Data</a>