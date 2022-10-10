<?php
    require("koneksi.php");

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    if ( $result ){
        echo"
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = index.php;
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data Gagal Dihapus');
                document.location.href = hapus.php;
            </script>
        ";
    }
?>