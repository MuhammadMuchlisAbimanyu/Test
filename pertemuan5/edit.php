

<?php
    require("koneksi.php");
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT & FROM mahasiswa");
    
    $mahasiswa = [];
    
    while ($row = mysqli_fetch_assoc($result)){
        $mahasiswa[] = $row;
    }

    if(isset($_POST["tambah"])){
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $prodi = $_POST["prodi"];

        $sql = "UPDATE from mahasiswa SET nim = '$nim', nama_mhs = '$nama', kelas = '$kelas', prodi = '$prodi', WHERE id = $id;";
        // Bedakan petik luar dan petik dalam
        $result = mysqli_query($conn, $sql);

        if ( $result ){
            echo"
                <script>
                    alert('Data Berhasil Ditambah');
                    document.location.href = index.php;
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Data Gagal Ditambah');
                    document.location.href = tambah.php;
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
    <title>Edit Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <input type="number" name="nim" value="<?php echo $mhs["id"]; ?>"><br>
        <label for="nama">Nim : </label>
        <input type="number" name="nim" value="<?php echo $mhs["id"]; ?>"><br>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" value="<?php echo $mhs["id"]; ?>><br>
        <label for="nama">Kelas : </label>
        <input type="kelas" name="kelas" value="<?php echo $mhs["id"]; ?>><br>
        <label for="nama">Prodi : </label>
        <input type="text" name="prodi" value="<?php echo $mhs["id"]; ?>><br>
        <button type="submit" name="tambah">Edit</button>
    </form>
</body>
</html>