<?php
    require("koneksi.php");

    $result = mysqli_query($conn, "SELECT * FROM file_upload");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Gambar</title>
</head>
<body>
    <<table>
        <tr>
            <th>No</th>
            <th>Nama File</th>
        </tr>
        <?php foreach($file as $gambar): ?>
        <tr>
            <td><?php $i ?></td>
            <td><img src=""></td>
        </tr>
        <?php $ii++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>