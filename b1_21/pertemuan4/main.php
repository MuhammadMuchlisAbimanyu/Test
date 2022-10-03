<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Penulisan PHP
        // $kata = "Muc";
        // $nilai = 2021;
        // $koma = 2.7;
        // echo $kata . "Sekarang tahun" . $nilai;

        // Decision If & Else
        // $a = 10;
        // $b = 15;
        // If ($a > $b) {
        // echo "Nilai a lebih besar dari b";
        // } elseif ($a == $b) {
        // echo "Nilai a sama dengan b";
        // } else {
        // echo "Nilai a lebih kecil dari b";
        // }
        
        // Switch Case
        // $kelas = "B";
        // Switch($kelas) {
        // Case "A" :
        // echo "Selamat datang di kelas A";
        // break;
        // Case "B" :
        // echo "Selamat datang di kelas B";
        // break;
        // Case "C" :
        // echo "Selamat datang di kelas C";
        // break;
        // }
        
        // Perulangan For
        // for ( $i=0; $i < 10; $i++) {
        //     echo "Angka" . $i+1;
        //     echo "<br>";
        //     }

        //Foreach
        // $murid = ["andi","ahma","rian","nina","ayu","dhika"];
        // foreach ( $murid as $nama ) {
        // echo "Saya adalah" . $nama;
        // echo "<br>";
        // }

        // $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        // // foreach($age as $x => $val) {
        // // echo "$x = $val<br>";
        // // }

        // echo $age[0];

    ?>

    <!-- Form Required -->
    <form action="data_login.php" method="get">
        <label for="username">Username : </label>
        <input type="text" name="username" required><br>
        <label for="password">Password : </label>
        <input type="password" name="password" required ><br>
        <input type="submit" name="submit" value="submit">
    </form>

</body>
</html>