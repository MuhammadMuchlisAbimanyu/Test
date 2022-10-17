<?php
    require("koneksi.php");
    
    if(isset($_POST["upload"])){
        $nama = $_POST["nama"];
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $extensi = strtolower(end($x));

        $gambar_baru = "$nama.$extensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, 'img/'.$gambar_baru)){
            $result = mysqli_query($conn, "INSERT INTO file_upload VALUES ('','$gambar_baru')");
            if($result){
                echo"
                    <script>
                        alert('File berhasil diupload');
                        href.location = 'read_file.php';                    
                    </script>
                ";
            }else{
                echo error_log($result);
            }
        }else{
            echo"
            <script>
                alert('File gagal diupload');                    
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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="upload">
        <div class="background-upload">
            <h1>File Upload</h1>
            <form class="form-upload" action="" method="post" enctype="multipart/form-data">
            <label for="">Nama</label>
            <input type="text" name="nama" value="">
            <label for="">Upload Gambar</label>
            <input type="file" name="gambar" value="">
            <button type="submit" name="upload">Upload</button>
        </form>
        </div>

    </section>

</body>
</html>