<?php
$servename = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "perpus";

//membuat koneksi
$conn = mysqli_connect ($servename, $username, $password, $dbname);

//cek koneksi
if (!$conn) {
    die ("Koneksi gagal:" . mysqli_connect_error());
}

$sql = "UPDATE anggota_perpus SET alamat='Jl. Educa Studio', jenis_kelamin='laki-laki', agama='hindu' WHERE id_anggota=1";

if (mysqli_query($conn, $sql)) {
    echo "Rekord berhasil diupdate"; 
} else {
    echo "Ada kesalahan update rekord: " . mysqli_error($conn);
}

mysqli_close($conn);

//update alamat, jenis kelamin, dan agama pada id_anggota = 1
//mengubah alamat, jenis kelamin, dan agama
?>