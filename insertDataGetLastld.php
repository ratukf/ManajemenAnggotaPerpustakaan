<?php
$servename = "127.0.0.1" ;
$username = "root" ;
$password = "";
$dbname = "perpus" ;

//create connection
$conn = mysqli_connect($servename, $username, $password, $dbname);
//check connection
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

$sql = "INSERT INTO anggota_perpus (nama, alamat, jenis_kelamin, agama, asal_sekolah)
VALUES ('Beta Sumbrata', 'JL. Gamelab Indonesia No. 9, Salatiga', 'laki-laki', 'islam', 'SMK 32 Gamnelab')";
 
 if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "Rekord baru berhasil ditambahkan. ID terakhir yang ditambahkan: " . $last_id;
 } else {
    echo "Gagal: " . $sql . "<br>" . mysqli_error($conn);
 }

 mysqli_close($conn);

 //menambahkan data dgn mengetahui ID terakhir pada tabel.
?>