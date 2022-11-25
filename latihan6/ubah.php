<?php 
require 'function.php';

// ambil data di URL
$id = $_GET["id"];

// query data siswa berdasarkan id
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil di ubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index2.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
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
    <title>Ubah data siswa</title>
</head>
<body>
    <h1>Tambah data siswa</h1>    

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $sw["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $sw["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" required value="<?= $sw["nama"]; ?>">
            </li>
            <li>
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="nis" value="<?= $sw["nis"]; ?>">
            </li>
            <li>
                <label for="email">EMAIL : </label>
                <input type="text" name="email" id="email" value="<?= $sw["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $sw["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">GAMBAR : </label> <br>
                <img src="image/<?= $sw['gambar']; ?>" width="90"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!!!</button>
            </li>

        </ul>

    </form>


</body>
</html>