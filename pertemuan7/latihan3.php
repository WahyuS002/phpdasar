<?php
    if(!isset($_GET["judul"]) ||
    !isset($_GET["type"]) ||
    !isset($_GET["episode"]) ||
    !isset($_GET["aired"]))
        {
            header("Location: latihan2.php");
            exit;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $_GET["judul"]?></title>
</head>
<body>
    
    <ul>
        <img src="image/<?= $_GET["image"]?>">

        <li>Judul : <?= $_GET["judul"]?></li>
        <li>Type : <?= $_GET["type"]?></li>
        <li>Aired : <?= $_GET["aired"]?></li>
        <li>Episode : <?= $_GET["episode"]?></li>
    </ul>

</body>
</html>