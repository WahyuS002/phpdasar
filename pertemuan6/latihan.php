<?php
    $mahasiswa = [
        [
        "nama" => "Wahyu Syahputra",
        "npm"  => "G1A018093",
        "alamat" => "Kampar"
        ],
        [
        "nama" => "Syahputra",
        "npm"  => "G1A0193",
        "alamat" => "Kpar"    
        ]
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
    
    <ul>
        <?php foreach($mahasiswa as $m){?>
            <?php foreach($m as $n){?>
                <li><?= $n?></li>
            <?php }?>
            <?php echo "<br>"?>
        <?php }?>
    </ul>

</body>
</html>