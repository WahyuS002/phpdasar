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
    <title>My Anime List</title>
</head>
<body>
    
    <ul>
        <?php foreach($anime as $a) {?>
            
            <img src="image/<?= $a["image"]?>" alt="">
            
            <li>Nama : <?= $a["judul"]?></li>
            <li>Type : <?= $a["type"]?></li>
            <li>Episode : <?= $a["episode"]?></li>
            <li>Aried : <?= $a["aired"]?></li>
        <?php }?>
        <?php echo"<br>"?>
    </ul>

</body>
</html>