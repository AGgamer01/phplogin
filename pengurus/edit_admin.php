<?php
//koneksi
include('confiq/koneksi.php');
 
$id_admin=$_GET['id_admin']; //ambil ID
 
$query="SELECT * FROM tb_admin WHERE id_admin = '$id_admin'";
$data=mysqli_query($conn,$query);
 
//menampung hasil
$row=mysqli_fetch_assoc($data);
 
?>
<h1>login</h1>
 
<form method="post" action="ubah_admin.php">
    <p>ID <input type="text" name="id_admin" required="required" value="<?php echo $row['id_admin']; ?>"> </p>
    <p>username <input type="text" name="username" value="<?php echo $row['username']; ?>"> </p>
    <p>password <input type="password" name="password" value="<?php echo $row['password']; ?>"></textarea> </p>

        <button type="submit">confirm</button>
        <button type="reset">Batal</button>
    </p>
</form>
?>