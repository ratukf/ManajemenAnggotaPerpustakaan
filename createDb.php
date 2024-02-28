<?php
$servename = "127.0.0.1";
$username = "root";
$password = "";

//membuat koneksi
$conn = mysqli_connect ($servename, $username, $password);

//cek kondisi koneksi
if (!$conn) {
    die ("Koneksi Gagal:" . mysqli_connect_error());
}

//membuat database
$sql = "CREATE DATABASE perpus";
if (mysqli_query($conn, $sql)) {
    echo "Database berhasil dibuat";
}
else {echo "Gagal tehubung dengan database:" . mysqli_error($conn);
}
mysqli_close($conn);
?>