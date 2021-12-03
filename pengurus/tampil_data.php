<?php
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION ['username'])) {
    header("location: index.php");
}

//memanggil file koneksi
include('confiq/koneksi.php');
 
//ambil data dari database
$query="SELECT * FROM tbpengurus ORDER BY id ASC";
 
$data=mysqli_query($conn,$query);
?>
 
<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<html>
<head>
    <title>Data Pengurus</title>
</head>
<body>

<h1>Data Pengurus</h1>
<p>
    <a href="logout.php">Logout</a>
</p>
 
<h1>Data Pengurus</h1>
<table border="1" class="container">
    <tr class="container-center">
        <th>ID</th>
        <th>Nama</th>
        <th>gender</th>
        <th>alamat</th>
        <th>Gaji</th>
        <th>Aksi</th>
    </tr>
<?php
 while($row=mysqli_fetch_assoc($data)) {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['gaji']; ?></td>
        <td>
            <a href="edit_data.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" >Edit</a> | 
            <a href="hapus_data.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin nih?')" class="btn btn-danger">Delete</a>
 
        </td>
    </tr>
<?php 
 }
?>
</table>



<hr>
 
<h1>Input Data</h1>
 
<form method="post" action="simpan_data.php">
    <p>ID <input type="text" name="id" required="required"> </p>
    <p>Nama <input type="text" name="nama"> </p>
    <p>Gender <input type="radio" name="gender" value="L"> Laki-laki 
    <input type="radio" name="gender" value="P"> Perempuan
    </p>
    <p>Alamat <textarea name="alamat"></textarea> </p>
    <p>Gaji <input type="number" name="gaji"></p>
    <p>
        <button type="submit">Simpan</button>
        <button type="reset">Batal</button>
    </p>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>