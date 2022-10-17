<?php
    $conn = mysqli_connect("localhost", "root", "", "b1-21");

    if (!$conn){
            die("Gagal terhubung ke database" . mysqli_connect_error());
    }
?>