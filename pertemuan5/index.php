<?php
    require("koneksi.php");

    $result = mysqli_query($conn, "SELECT & FROM mahasiswa");

    $mahasiswa = [];

    while ($row = mysqli_fetch_assoc($result)){
        $mahasiswa[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
    <style>
        
    </style>
</head>
<body>
    <h1>Ini Halaman Index</h1>
    <button type=""><a href="tambah.php">Tambah Data</a></button>
    <table border=1px>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
        <?php
            $i = 1; foreach ($mahasiswa as $mhs):
        ?>
        <tr>
            <td>
                <?php
                    echo $i;
                ?>
            </td>
            <td>
                <?php
                    echo $mhs['nim'];
                ?>
            </td>
            <td>
                <?php
                    echo $mhs['nama_mhs'];
                ?>
            </td>
            <td>
                <?php
                    echo $mhs['kelas'];
                ?>
            </td>
            <td>
                <?php
                    echo $mhs['prodi'];
                ?>
            </td>
            <td><a href="edit.php?id=<?php echo $mhs["id"]; ?>">Edit</a> 
            | <a href="hapus.php?id=<?php echo $mhs["id"]; ?>" onclick = "return confirm(Are you sure?)">Hapus</a></td>
        </tr>
        <?php 
            $i++; endforeach;
        ?>      
    </table>
</body>
</html>