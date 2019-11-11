<?php

$anime = [
    [
        "judul" => "Dr.Stone",
        "type" => "TV",
        "episode" => "Unknown",
        "aired" => "5 Juli",
        "image" => "2.jpg"       
    ],
    [
        "judul" => "Fullmetal Alchemist",
        "type" => "TV",
        "episode" => "50",
        "aired" => "10 Agusutus",
        "image" => "1.jpg"  
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My AnimeList</title>
</head>
<body>
    
    <?php foreach($anime as $a){?>
        <ul>
            <a href="latihan3.php?judul=<?= $a["judul"]?>&
            type=<?= $a["type"]?>&
            episode=<?= $a["episode"]?>&
            aired=<?= $a["aired"]?>&
            image=<?= $a["image"]?>
            "><img src="image/<?= $a["image"]?>"></a>
            <li>Judul : <?= $a["judul"]?></li>
        </ul>
    <?php }?>

</body>
</html>