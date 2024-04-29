<?php
require 'functions.php';
$tb_pasien = query("SELECT * FROM tb_pasien");

if(isset($_POST["cari"])) {
    $tb_pasien = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>
<div class="container">
  <div class="menu">
    <h1>Daftar Pasien</h1>
  </div>
<a href="tambah.php">TAMBAH DATA PASIEN RS.MARINA</a>
<br><br>
<div class="main">
<form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>

</form>

<br>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>No_identitas</th>
        <th>Nama_pasien</th>
        <th>Tmpt_tgl_lahir</th>
        <th>Jenis_kelamin</th>
        <th>Alamat</th>
        <th>No_telp</th>
    </tr>
</div>
    <?php $i = 1; ?>
    <?php foreach( $tb_pasien as $row ):?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>|
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a>
        </td>
        <td><?= $row["no_identitas"]; ?></td>
        <td><?= $row["nama_pasien"]; ?></td>
        <td><?= $row["tmpt_tgl_lahir"] ?></td>
        <td><?= $row["jenis_kelamin"] ?></td>
        <td><?= $row["alamat"] ?></td>
        <td><?= $row["no_telp"] ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
</div>    
</body>
</html>