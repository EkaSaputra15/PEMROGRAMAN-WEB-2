<?php
include "Orang.php";
include "visibility.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum2</title>
</head>
<body>
    <h1>Praktikum2</h1>
<div>
    <?php
        $eka = new Orang();
        $eka->nama = "Eka Saputra";

        $eka->ucapsalam();

    echo "<br>";
        $dendi = new Orang();
        $dendi->nama = "M. dendi saputra";
        $dendi->ucapSalam();

        echo "<br>";

        $visibility = new visibility();
        $visibility->tampilkanProperty();

        echo " Ini akses di luar kelas <br>";
        echo "public : " . $visibility->public . '<br>';
        echo "protected : " . $visibility->protected . '<br>';
        echo "private : " . $visibility->private . '<br>';

        echo "<br> <br>";

        echo "Nilai MK Pemrograman web:";
        $nilai = new Nilai();
        $nilai->setTugas(79);
        $nilai->setUts(90);
        $nilai->setUas(89);

        echo "Nilai"

    ?>
</div>
</body>
</html>