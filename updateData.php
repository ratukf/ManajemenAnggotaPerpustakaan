<?php
$servename = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "perpus";

//membuat koneksi
$conn = mysqli_connect ($servename, $username, $password, $dbname);

//cek kondisi koneksi
if (!$conn) {
    die ("Koneksi Gagal:" . mysqli_connect_error());
}

$sql = "UPDATE anggota_perpus SET nama='Charley Marley' WHERE id_anggota=3";

if (mysqli_query($conn, $sql)) {
    echo "Rekord berhasil diupdate"; 
} else {
    echo "Ada kesalahan update rekord: " . mysqli_error($conn);
}

mysqli_close($conn);

//update nama anggota
?>