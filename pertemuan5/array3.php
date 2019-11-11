<?php
    $mahasiswa = [
        ["Wahyu", "G1A018093", "Bengkulu"],
        ["Wahyuok", "G1B018093", "Bgkulu"],
        ["Wahyu", "G1C018093", "Bkulu"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <?php foreach($mahasiswa as $m) {?>
    <ul>
        <li><?= $m[0];?>
        <li><?= $m[1];?>
        <li><?= $m[2];?>
    </ul>
    <?php }?>

</body>
</html>