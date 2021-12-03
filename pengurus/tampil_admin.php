<?php
//memanggil file koneksi
include('confiq/koneksi.php');
 
//ambil data dari database
$query="SELECT * FROM tb_admin ORDER BY id_admin ASC";
 
$data=mysqli_query($conn,$query);
?>
 
<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<html>
<head>
    <title>Data Pengurus</title>
</head>
<body>


<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link eneble">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--navbar-->
 
<h1>Data Pengurus</h1>
<table border="1" class="container">
    <tr class="container-center">
        <th>ID</th>
        <th>username</th>
        <th>passoword</th>
    </tr>
<?php
 while($row=mysqli_fetch_assoc($data)) {
?>
    <tr>
        <td><?php echo $row['id_admin']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>

        <td>
            <a href="edit_admin.php?id_admin=<?php echo $row['id_admin']; ?>" class="btn btn-warning" >Edit</a> | 
            <a href="hapus_admin.php?id_admin=<?php echo $row['id_admin']; ?>" onclick="return confirm('Yakin nih?')" class="btn btn-danger">Delete</a>
 
        </td>
    </tr>
 
<?php
 }
?>
</table>



<hr>
 
<h1>Input Data</h1>
 
<form method="post" action="simpan_admin.php">
    <p>ID <input type="text" name="id_admin" required="required"> </p>
    <p>username <input type="text" name="username"> </p>
    <p>password <input type="password"  name="password"></textarea> </p>

    <p>
        <button type="submit">Simpan</button>
        <button type="reset">Batal</button>
    </p>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>