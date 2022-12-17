<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>

<body>

    <center>
        <h2> Penjumlahan bilangan genap menggunakan perulangan </h2>
        <?php
        $jumlah = 0;
        for ($i = 1; $i <= 6; $i++) {
            if ($i % 2 == 0) {
                $jumlah += $i;
            }
        }
        echo "Akulturasi bilangan genap dari 0 sd 6 adalah $jumlah";
        ?>
    </center>
</body>

</html>