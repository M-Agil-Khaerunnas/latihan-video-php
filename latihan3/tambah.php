<?php 
require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index2.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index2.php';
            </script>
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data siswa</title>
</head>
<body>
    <h1>Tambah data siswa</h1>    

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="nis">
            </li>
            <li>
                <label for="email">EMAIL : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">GAMBAR : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!!!</button>
            </li>

        </ul>

    </form>


</body>
</html>