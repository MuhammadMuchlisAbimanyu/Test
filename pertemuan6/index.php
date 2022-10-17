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
        date_default_timezone_set("Asia/Makassar");
        echo "Today is " . date("l") . ", " . date("d-m-Y") . " and The time is " . date("h:i:s a") . "<br>";

        $d=strtotime("Tomorrow");
        echo date("l, d-m-Y h:i:s a", $d) . "<br>";
        $d=strtotime("Next Saturday");
        echo date("l, d-m-Y h:i:s a", $d) . "<br>";
        $d=strtotime("+3 Months");
        echo date("l, d-m-Y h:i:s a", $d) . "<br>";
        $d=strtotime("-19 Years +2 Months +10 Days");
        echo date("l, d-m-Y h:i:s a", $d) . "<br>";
        $d=strtotime("+19 Years ago +2 Months +10 Days");
        echo date("l, d-m-Y h:i:s a", $d) . "<br>";
    ?>
</body>
</html>

