<?php 
require 'functions.php';
$id =$_GET["id"];

$tb_pasien = query("SELECT * FROM tb_pasien WHERE id = $id")[0];

// cek apakah tombol submit sdh bisa di tekan
if( isset($_POST["submit"]) ) {
    if( ubah($_POST) > 0 ) {
        echo "
           <script>
               alert('data berhasil diubah!');
               document.location.href = 'index.php';
           </script>
        ";
     } else {
        echo "
           <script>
               alert('data gagal diubah!');
               document.location.href = 'index.php';
           </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Pasien</title>
</head>
<body>
    <h1>Ubah Data Pasien</h1>

    <form action="" method="post">
       <ul>
        <li>
            <label for="no_identitas">No_identitas :</label>
            <input type="text" name="no_identitas" id="no_identitas" required
            value="<?= $tb_pasien["no_identitas"];?>">
        </li>
        <li>
            <label for="nama_pasien">Nama_pasien :</label>
            <input type="text" name="nama_pasien" id="nama_pasien" required
            value="<?= $tb_pasien["nama_pasien"];?>">
        </li>
        <li>
            <label for="tmpt_tgl_lahir">Tmpt_tgl_lahir :</label>
            <input type="text" name="tmpt_tgl_lahir" id="tmpt_tgl_lahir" required
            value="<?= $tb_pasien["tmpt_tgl_lahir"];?>">
        </li>
        <li>
            <label for="alamat">alamat :</label>
            <input type="text" name="alamat" id="alamat" required
            value="<?= $tb_pasien["alamat"];?>">
        </li>
        <li>
            <label for="no_telp">No_telp :</label>
            <input type="text" name="no_telp" id="no_telp" required
            value="<?= $tb_pasien["no_telp"];?>">
        </li>
        <li>
            <button type="submit" name="submit">Ubah Data!</button>
        </li>
       </ul>

    </form>
</body>
</html>