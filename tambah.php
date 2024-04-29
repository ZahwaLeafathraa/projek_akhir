<?php 
require 'functions.php';
// cek apakah tombol submit sdh bisa di tekan
if( isset($_POST["submit"]) ) {
    if( tambah($_POST) > 0 ) {
        echo "
           <script>
               alert('data berhasil ditambahkan!');
               document.location.href = 'index.php';
           </script>
        ";
     } else {
        echo "
           <script>
               alert('data gagal ditambahkan!');
               document.location.href = 'index.php';
           </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pasien</title>
    <link rel="stylesheet" href="styletambah.css">
</head>
<body>
<div class="container">
    <div class="menu">
       <h1>Tambah Data Pasien</h1>
    </div>
    <div class="main">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
       <ul>
        <li>
            <label for="no_identitas">no_identitas </label>
            <input type="1" name="no_identitas" id="no_identitas" required class="pertama">
        </li>
        <li>
            <label for="nama_pasien">nama_pasien </label>
            <input type="2" name="nama_pasien" id="nama_pasien" required class="dua">
        </li>
        <li>
            <label for="tmpt_tgl_lahir">tmpt_tgl_lahir </label>
            <input type="3" name="tmpt_tgl_lahir" id="tmpt_tgl_lahir" required class="tiga">
        </li>
        <li>
            <label for="alamat">alamat </label>
            <input type="2" name="alamat" id="alamat" required class="dua">
        </li>
        <li>
            <label for="no_telp">no_telp </label>
            <input type="2" name="no_telp" id="no_telp" required class="dua">
        </li>
            <button type="submit" name="submit">Tambah Data!</button>
       </ul>

    </form>
    </div>
</div>
</body>
</html>

