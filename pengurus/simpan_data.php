<?php
//buat session
if(!isset($_SESSION)) {
    session_start();
}
 
//jika ada orang yang masuk tanpa login
if(empty($_SESSION['username'])) {
    header("location: index.php");
}

//koneksi
include('confiq/koneksi.php');
 
//ambil data dari form
$id=$_POST['id'];
$nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$gaji=$_POST['gaji'];
 
//memasukan data ke database
$query="INSERT INTO tbpengurus VALUES ('$id', '$nama', '$gender', '$alamat', '$gaji')";
$simpan=mysqli_query($conn,$query);
 
?>
<a href="tampil_data.php"> Kembali Untuk lihat Data</a>