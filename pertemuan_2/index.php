<?php
    $judulpage = 'latihan script php';
    $konten ='<h3> latihan script php </h3>';
    $konten .='latihan script php <ul><li> penulisan script php bersifat case sensitve</li><li>setiap akhir baris diawali dengan titik koma</ul>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage; ?></title>
</head>
<body>
    <?php
        echo $konten;
    ?>
</body>
</html>