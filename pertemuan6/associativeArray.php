<?php

    //array biasa
    
    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php foreach($angka as $a){?>
        <?php foreach($a as $b){?>
            <div class="kotak"><?= $b?></div>
        <?php }?>
        <div class="clear"></div>
    <?php }?>
    
</body>
</html>