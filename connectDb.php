<?php
$servename = "127.0.0.1";
$username = "root";
$password = "";

//membuat koneksi
try {
    $conn=new PDO("mysql:host=$servename; dbname = ", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Koneksi berhasil terhubung";
}

catch(PDOException $e) {
    echo "Koneksi gagal:" . $e->getMessage();
}

$conn = null;
//membuat koneksi database menggunakan metode PDO
?>