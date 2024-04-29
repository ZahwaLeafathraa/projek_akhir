<?php 
$conn = mysqli_connect("localhost","root","","db_asti");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
     
    $no_identitas = htmlspecialchars($data["no_identitas"]);
    $nama_pasien = htmlspecialchars($data["nama_pasien"]);
    $tmpt_tgl_lahir = htmlspecialchars($data["tmpt_tgl_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_tlp = htmlspecialchars($data["no_telp"]);
    
    
    $query = "INSERT INTO tb_pasien
                VALUES 
              ('','$no_identitas', '$nama_pasien', '$tmpt_tgl_lahir', '$alamat', '$no_tlp')
           ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_pasien WHERE id = $id");

    return mysqli_affected_rows($conn);
}



function ubah($data){
    global $conn;

    $id = $data["id"];
    $no_identitas = htmlspecialchars($data["no_identitas"]);
    $nama_pasien = htmlspecialchars($data["nama_pasien"]);
    $tmpt_tgl_lahir = htmlspecialchars($data["tmpt_tgl_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_tlp = htmlspecialchars($data["no_telp"]);
    
    
    $query = "UPDATE tb_pasien SET
                no_identitas = '$no_identitas',
                nama_pasien = '$nama_pasien',
                tmpt_tgl_lahir = '$tmpt_tgl_lahir'
                alamat = '$alamat'
                no_telp = '$no_tlp'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM tb_pasien
                WHERE
            no_identitas LIKE '%$keyword%' OR
            nama_pasien LIKE '%$keyword%' OR
            tmpt_tgl_lahir LIKE '%$keyword%' OR
            alamat LIKE '%$keyword%' OR
            no_telp LIKE '%$keyword%'
        ";
    return query($query);
}


?>