<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Anggota Perpustakaan | SMK Gamelab</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Anggota Perpus Baru</h3>
        <h1>SMK Gamelab Indonesa</h1>
    </header>
    
    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar-anggota.php">Daftar Baru</a></li>
            <li><a href="list-daftar-anggota.php">List Anggota Baru</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
        if($_GET['status'] == 'sukses') {
            echo "<div style='border: 1px solid rgb(214,233,198);
            background-color: rgb(223,240,216);color: rgb(70,136,71);'>Pendaftaran anggota baru berhasil!</div>";
        } else {
            echo "<div style='border: 1px solid rgb(238,211,215);
            background-color: rgb(242,222,222);color: rgb(185,74,72);'>Pendaftaran gagal!</div>";
        }
        ?>
    </p>
    <?php endif; ?>
</body>
</html>